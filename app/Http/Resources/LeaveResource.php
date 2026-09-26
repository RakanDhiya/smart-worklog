<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LeaveResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'employee' => $this->whenLoaded(
                'employee',
                function () {
                    return [
                        'id' => $this->employee->id,
                        'employee_code' => $this->employee->employee_code,
                        'name' => $this->employee->user?->name,
                    ];
                }
            ),
            'start_date' => $this->start_date?->format('Y-m-d'),
            'end_date' => $this->end_date?->format('Y-m-d'),
            'type' => $this->type,
            'reason' => $this->reason,
            'status' => $this->status,
            'approver' => $this->whenLoaded(
                'approver',
                function () {
                    return $this->approver
                        ? [
                            'id' => $this->approver->id,
                            'employee_code' => $this->approver->employee_code,
                            'name' => $this->approver->user?->name,
                        ]
                        : null;
                }
            ),
            'approved_at' => $this->approved_at?->toISOString(),
            'note' => $this->note,
            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}
