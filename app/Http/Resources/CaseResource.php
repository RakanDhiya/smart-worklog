<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CaseResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'case_number' => $this->case_number,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'priority' => $this->priority,

            'pics' => $this->whenLoaded('pics', function () {
                return $this->pics->map(function ($employee) {
                    return [
                        'id' => $employee->id,
                        'employee_code' => $employee->employee_code,
                        'name' => $employee->user?->name,
                    ];
                });
            }),

            'members' => $this->whenLoaded('members', function () {
                return $this->members->map(function ($employee) {
                    return [
                        'id' => $employee->id,
                        'employee_code' => $employee->employee_code,
                        'name' => $employee->user?->name,
                    ];
                });
            }),

            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}
