<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index(Request $request)
    {
        $query = Employee::query()->with('user');
        if ($request->filled('search')) {
            $search = $request->string('search');
            $query->where(function ($q) use ($search) {
                $q->where('employee_code', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhereHas('user', function ($userQuery) use ($search) {
                        $userQuery
                            ->where('name', 'like', "%{$search}%")
                            ->orWhere('email', 'like', "%{$search}%");
                    });
            });
        }
        if ($request->filled('status')) {
            $query->where('status', $request->string('status'));
        }
        if ($request->filled('department')) {
            $query->where(
                'department',
                $request->string('department')
            );
        }
        $sort = $request->get('sort', 'created_at');
        $direction = $request->get('direction', 'desc');
        $allowedSorts = [
            'employee_code',
            'position',
            'department',
            'join_date',
            'status',
            'created_at',
        ];
        if (! in_array($sort, $allowedSorts)) {
            $sort = 'created_at';
        }
        if (! in_array($direction, ['asc', 'desc'])) {
            $direction = 'desc';
        }
        $query->orderBy($sort, $direction);
        $perPage = min(
            max((int) $request->get('per_page', 15), 1),
            100
        );
        $employees = $query->paginate($perPage);
        return EmployeeResource::collection($employees);
    }


    public function store(StoreEmployeeRequest $request): EmployeeResource
    {
        $employee = Employee::create(
            $request->validated()
        );
        $employee->load('user');
        return new EmployeeResource($employee);
    }

    public function show(Employee $employee): EmployeeResource
    {
        $employee->load('user');
        return new EmployeeResource($employee);
    }

    public function update(UpdateEmployeeRequest $request, Employee $employee): EmployeeResource
    {
        $employee->update(
            $request->validated()
        );
        $employee->load('user');
        return new EmployeeResource($employee);
    }

    public function destroy(Employee $employee): JsonResponse
    {
        $employee->delete();
        return response()->json([
            'message' => 'Employee deleted successfully.',
        ]);
    }
}
