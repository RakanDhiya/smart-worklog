<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreLeaveRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'employee_id' => [
                'required',
                'integer',
                'exists:employees,id',
            ],

            'start_date' => [
                'required',
                'date',
                'date_format:Y-m-d',
            ],

            'end_date' => [
                'required',
                'date',
                'date_format:Y-m-d',
                'after_or_equal:start_date',
            ],

            'type' => [
                'required',
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
                'nullable',
                'integer',
                'exists:employees,id',
            ],

            'approved_at' => [
                'nullable',
                'date',
            ],

            'note' => [
                'nullable',
                'string',
            ],
        ];
    }
}
