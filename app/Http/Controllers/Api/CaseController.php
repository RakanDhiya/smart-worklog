<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCaseRequest;
use App\Http\Requests\UpdateCaseRequest;
use App\Http\Resources\CaseResource;
use App\Http\Responses\CommonResponse;
use App\Http\Responses\PaginationResponse;
use App\Models\CaseModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $query = CaseModel::query()
            ->with([
                'pics.user',
                'members.user',
            ]);

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('case_number', 'ilike', "%{$search}%")
                    ->orWhere('title', 'ilike', "%{$search}%")
                    ->orWhere('description', 'ilike', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where(
                'status',
                $request->input('status')
            );
        }

        if ($request->filled('priority')) {
            $query->where(
                'priority',
                $request->input('priority')
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

        $sort = $request->input('sort', 'created_at');
        $direction = $request->input('direction', 'desc');

        if (! in_array($sort, $allowedSorts, true)) {
            $sort = 'created_at';
        }

        if (! in_array($direction, ['asc', 'desc'], true)) {
            $direction = 'desc';
        }

        $query->orderBy($sort, $direction);
        $perPage = min(max((int) $request->input('limit', 15), 1), 100);

        $cases = $query->paginate($perPage);

        return PaginationResponse::success(
            'Cases retrieved successfully.',
            CaseResource::collection($cases->items()),
            $cases->currentPage(),
            $cases->perPage(),
            $cases->total()
        );
    }

    public function store(
        StoreCaseRequest $request
    ): JsonResponse {
        $validated = $request->validated();
        $picIds = $validated['pic_ids'] ?? [];
        $memberIds = $validated['member_ids'] ?? [];
        unset($validated['pic_ids'], $validated['member_ids']);

        $case = CaseModel::create($validated);
        $case->pics()->sync($picIds);
        $case->members()->sync($memberIds);
        $case->load([
            'pics.user',
            'members.user',
        ]);

        return CommonResponse::success('Case created successfully.', new CaseResource($case), 201);
    }

    public function show(CaseModel $case): JsonResponse
    {
        $case->load([
            'pics.user',
            'members.user',
        ]);

        return CommonResponse::success('Case retrieved successfully.', new CaseResource($case));
    }

    public function update(UpdateCaseRequest $request,        CaseModel $case): JsonResponse
    {
        $validated = $request->validated();
        $hasPics = array_key_exists('pic_ids', $validated);
        $hasMembers = array_key_exists('member_ids', $validated);
        $picIds = $validated['pic_ids'] ?? [];
        $memberIds = $validated['member_ids'] ?? [];
        unset($validated['pic_ids'], $validated['member_ids']);
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

        return CommonResponse::success('Case updated successfully.', new CaseResource($case));
    }

    public function destroy(CaseModel $case): JsonResponse
    {
        $case->delete();
        return CommonResponse::success('Case deleted successfully.');
    }
}
