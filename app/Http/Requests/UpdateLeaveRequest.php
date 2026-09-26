<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateLeaveRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'employee_id' => [
                'sometimes',
                'integer',
                'exists:employees,id',
            ],

            'start_date' => [
                'sometimes',
                'date',
                'date_format:Y-m-d',
            ],

            'end_date' => [
                'sometimes',
                'date',
                'date_format:Y-m-d',
                'after_or_equal:start_date',
            ],

            'type' => [
                'sometimes',
                Rule::in([
                    'annual',
                    'sick',
                    'personal',
                    'maternity',
                    'unpaid',
                    'other',
                ]),
            ],

            'reason' => [
                'sometimes',
                'nullable',
                'string',
            ],

            'status' => [
                'sometimes',
                Rule::in([
                    'pending',
                    'approved',
                    'rejected',
                    'cancelled',
                ]),
            ],

            'approved_by' => [
                'sometimes',
                'nullable',
                'integer',
                'exists:employees,id',
            ],

            'approved_at' => [
                'sometimes',
                'nullable',
                'date',
            ],

            'note' => [
                'sometimes',
                'nullable',
                'string',
            ],
        ];
    }
}
