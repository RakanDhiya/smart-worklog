<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAttendanceRequest;
use App\Http\Requests\UpdateAttendanceRequest;
use App\Http\Resources\AttendanceResource;
use App\Models\Attendance;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index(Request $request)
    {
        $query = Attendance::query()
            ->with([
                'employee.user',
            ]);

        if ($request->filled('search')) {
            $search = $request->string('search');

            $query->where(function ($q) use ($search) {
                $q->where('status', 'like', "%{$search}%")
                    ->orWhere('note', 'like', "%{$search}%")
                    ->orWhereHas('employee', function ($q) use ($search) {
                        $q->where(
                            'employee_code',
                            'like',
                            "%{$search}%"
                        );
                    })
                    ->orWhereHas('employee.user', function ($q) use ($search) {
                        $q->where('name', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%");
                    });
            });
        }

        if ($request->filled('employee_id')) {
            $query->where(
                'employee_id',
                $request->integer('employee_id')
            );
        }

        if ($request->filled('status')) {
            $query->where(
                'status',
                $request->string('status')
            );
        }

        if ($request->filled('date')) {
            $query->where(
                'date',
                $request->string('date')
            );
        }

        if ($request->filled('date_from')) {
            $query->whereDate(
                'date',
                '>=',
                $request->string('date_from')
            );
        }

        if ($request->filled('date_to')) {
            $query->whereDate(
                'date',
                '<=',
                $request->string('date_to')
            );
        }

        $allowedSorts = [
            'date',
            'check_in',
            'check_out',
            'status',
            'created_at',
            'updated_at',
        ];

        $sort = $request->get(
            'sort',
            'date'
        );

        $direction = $request->get(
            'direction',
            'desc'
        );

        if (! in_array($sort, $allowedSorts, true)) {
            $sort = 'date';
        }

        if (! in_array($direction, ['asc', 'desc'], true)) {
            $direction = 'desc';
        }

        $query->orderBy(
            $sort,
            $direction
        );

        $perPage = min(
            max(
                (int) $request->get('per_page', 15),
                1
            ),
            100
        );

        $attendances = $query->paginate($perPage);

        return AttendanceResource::collection($attendances);
    }

    public function store(
        StoreAttendanceRequest $request
    ): AttendanceResource {
        $attendance = Attendance::create(
            $request->validated()
        );

        $attendance->load([
            'employee.user',
        ]);

        return new AttendanceResource($attendance);
    }

    public function show(
        Attendance $attendance
    ): AttendanceResource {
        $attendance->load([
            'employee.user',
        ]);

        return new AttendanceResource($attendance);
    }

    public function update(
        UpdateAttendanceRequest $request,
        Attendance $attendance
    ): AttendanceResource {
        $attendance->update(
            $request->validated()
        );

        $attendance->load([
            'employee.user',
        ]);

        return new AttendanceResource($attendance);
    }

    public function destroy(
        Attendance $attendance
    ): JsonResponse {
        $attendance->delete();

        return response()->json([
            'message' => 'Attendance deleted successfully.',
        ]);
    }
}
