<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCaseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'case_number' => [
                'required',
                'string',
                'max:255',
                'unique:cases,case_number',
            ],

            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'status' => [
                'sometimes',
                Rule::in([
                    'open',
                    'in_progress',
                    'resolved',
                    'closed',
                    'cancelled',
                ]),
            ],

            'priority' => [
                'sometimes',
                Rule::in([
                    'low',
                    'medium',
                    'high',
                    'urgent',
                ]),
            ],

            'pic_ids' => [
                'sometimes',
                'array',
            ],

            'pic_ids.*' => [
                'integer',
                'exists:employees,id',
                'distinct',
            ],

            'member_ids' => [
                'sometimes',
                'array',
            ],

            'member_ids.*' => [
                'integer',
                'exists:employees,id',
                'distinct',
            ],
        ];
    }
}
