<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Http\Resources\ActivityResource;
use App\Models\Activity;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(Request $request)
    {
        $query = Activity::query()
            ->with([
                'employee.user',
                'case',
            ]);

        if ($request->filled('search')) {
            $search = $request->string('search');

            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhereHas('employee.user', function ($q) use ($search) {
                        $q->where('name', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%");
                    })
                    ->orWhereHas('case', function ($q) use ($search) {
                        $q->where('case_number', 'like', "%{$search}%")
                            ->orWhere('title', 'like', "%{$search}%");
                    });
            });
        }

        if ($request->filled('employee_id')) {
            $query->where(
                'employee_id',
                $request->integer('employee_id')
            );
        }

        if ($request->filled('case_id')) {
            $query->where(
                'case_id',
                $request->integer('case_id')
            );
        }

        if ($request->filled('status')) {
            $query->where(
                'status',
                $request->string('status')
            );
        }

        $allowedSorts = [
            'title',
            'status',
            'started_at',
            'ended_at',
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

        $activities = $query->paginate($perPage);

        return ActivityResource::collection($activities);
    }

    public function store(
        StoreActivityRequest $request
    ): ActivityResource {
        $activity = Activity::create(
            $request->validated()
        );

        $activity->load([
            'employee.user',
            'case',
        ]);

        return new ActivityResource($activity);
    }

    public function show(
        Activity $activity
    ): ActivityResource {
        $activity->load([
            'employee.user',
            'case',
        ]);

        return new ActivityResource($activity);
    }

    public function update(
        UpdateActivityRequest $request,
        Activity $activity
    ): ActivityResource {
        $activity->update(
            $request->validated()
        );

        $activity->load([
            'employee.user',
            'case',
        ]);

        return new ActivityResource($activity);
    }

    public function destroy(
        Activity $activity
    ): JsonResponse {
        $activity->delete();

        return response()->json([
            'message' => 'Activity deleted successfully.',
        ]);
    }
}
