<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCaseRequest;
use App\Http\Requests\UpdateCaseRequest;
use App\Http\Resources\CaseResource;
use App\Models\CaseModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function index(Request $request)
    {
        $query = CaseModel::query()
            ->with([
                'pics.user',
                'members.user',
            ]);

        if ($request->filled('search')) {
            $search = $request->string('search');

            $query->where(function ($q) use ($search) {
                $q->where('case_number', 'like', "%{$search}%")
                    ->orWhere('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('status', 'like', "%{$search}%")
                    ->orWhere('priority', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where(
                'status',
                $request->string('status')
            );
        }

        if ($request->filled('priority')) {
            $query->where(
                'priority',
                $request->string('priority')
            );
        }

        $allowedSorts = [
            'case_number',
            'title',
            'status',
            'priority',
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

        $cases = $query->paginate($perPage);

        return CaseResource::collection($cases);
    }

    public function store(
        StoreCaseRequest $request
    ): CaseResource {
        $validated = $request->validated();

        $picIds = $validated['pic_ids'] ?? [];
        $memberIds = $validated['member_ids'] ?? [];

        unset(
            $validated['pic_ids'],
            $validated['member_ids']
        );

        $case = CaseModel::create($validated);

        $case->pics()->sync($picIds);
        $case->members()->sync($memberIds);

        $case->load([
            'pics.user',
            'members.user',
        ]);

        return new CaseResource($case);
    }

    public function show(
        CaseModel $case
    ): CaseResource {
        $case->load([
            'pics.user',
            'members.user',
        ]);

        return new CaseResource($case);
    }

    public function update(
        UpdateCaseRequest $request,
        CaseModel $case
    ): CaseResource {
        $validated = $request->validated();

        $hasPics = array_key_exists(
            'pic_ids',
            $validated
        );

        $hasMembers = array_key_exists(
            'member_ids',
            $validated
        );

        $picIds = $validated['pic_ids'] ?? [];
        $memberIds = $validated['member_ids'] ?? [];

        unset(
            $validated['pic_ids'],
            $validated['member_ids']
        );

        $case->update($validated);

        if ($hasPics) {
            $case->pics()->sync($picIds);
        }

        if ($hasMembers) {
            $case->members()->sync($memberIds);
        }

        $case->load([
            'pics.user',
            'members.user',
        ]);

        return new CaseResource($case);
    }

    public function destroy(
        CaseModel $case
    ): JsonResponse {
        $case->delete();

        return response()->json([
            'message' => 'Case deleted successfully.',
        ]);
    }
}
