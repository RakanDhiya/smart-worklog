<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,

            'user' => $this->whenLoaded('user', [
                'id' => $this->user->id,
                'name' => $this->user->name,
                'email' => $this->user->email,
            ]),

            'user_id' => $this->user_id,

            'employee_code' => $this->employee_code,
            'phone' => $this->phone,
            'position' => $this->position,
            'department' => $this->department,

            'join_date' => $this->join_date?->format('Y-m-d'),
            'birth_date' => $this->birth_date?->format('Y-m-d'),

            'gender' => $this->gender,
            'address' => $this->address,
            'status' => $this->status,

            'created_at' => $this->created_at?->toISOString(),
            'updated_at' => $this->updated_at?->toISOString(),
        ];
    }
}
