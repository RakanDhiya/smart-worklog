<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AttendanceResource extends JsonResource
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
            'date' => $this->date?->format('Y-m-d'),
            'check_in' => $this->check_in?->toISOString(),
            'check_out' => $this->check_out?->toISOString(),
            'status' => $this->status,
            'note' => $this->note,
            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}
