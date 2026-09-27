<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActivityResource extends JsonResource
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

            'case' => $this->whenLoaded(
                'case',
                function () {
                    return $this->case
                        ? [
                            'id' => $this->case->id,
                            'case_number' => $this->case->case_number,
                            'title' => $this->case->title,
                        ]
                        : null;
                }
            ),

            'title' => $this->title,
            'description' => $this->description,
            'started_at' => $this->started_at?->toISOString(),
            'ended_at' => $this->ended_at?->toISOString(),

            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}
