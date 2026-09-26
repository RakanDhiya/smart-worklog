<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLeaveRequest;
use App\Http\Requests\UpdateLeaveRequest;
use App\Http\Resources\LeaveResource;
use App\Models\Leave;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index(Request $request)
    {
        $query = Leave::query()
            ->with([
                'employee.user',
                'approver.user',
            ]);

        if ($request->filled('search')) {
            $search = $request->string('search');

            $query->where(function ($q) use ($search) {
                $q->where('reason', 'like', "%{$search}%")
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

        if ($request->filled('approved_by')) {
            $query->where(
                'approved_by',
                $request->integer('approved_by')
            );
        }

        if ($request->filled('status')) {
            $query->where(
                'status',
                $request->string('status')
            );
        }

        if ($request->filled('type')) {
            $query->where(
                'type',
                $request->string('type')
            );
        }

        if ($request->filled('start_date')) {
            $query->whereDate(
                'start_date',
                '>=',
                $request->string('start_date')
            );
        }

        if ($request->filled('end_date')) {
            $query->whereDate(
                'end_date',
                '<=',
                $request->string('end_date')
            );
        }

        $allowedSorts = [
            'start_date',
            'end_date',
            'type',
            'status',
            'approved_at',
            'created_at',
            'updated_at',
        ];

        $sort = $request->get(
            'sort',
            'created_at'
        );

        $direction = $request->get(
            'direction',
            'desc'
        );

        if (! in_array($sort, $allowedSorts, true)) {
            $sort = 'created_at';
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

        $leaves = $query->paginate($perPage);

        return LeaveResource::collection($leaves);
    }

    public function store(
        StoreLeaveRequest $request
    ): LeaveResource {
        $leave = Leave::create(
            $request->validated()
        );

        $leave->load([
            'employee.user',
            'approver.user',
        ]);

        return new LeaveResource($leave);
    }

    public function show(
        Leave $leave
    ): LeaveResource {
        $leave->load([
            'employee.user',
            'approver.user',
        ]);

        return new LeaveResource($leave);
    }

    public function update(
        UpdateLeaveRequest $request,
        Leave $leave
    ): LeaveResource {
        $leave->update(
            $request->validated()
        );

        $leave->load([
            'employee.user',
            'approver.user',
        ]);

        return new LeaveResource($leave);
    }

    public function destroy(
        Leave $leave
    ): JsonResponse {
        $leave->delete();

        return response()->json([
            'message' => 'Leave deleted successfully.',
        ]);
    }
}
