<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCaseRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'case_number' => [
                'sometimes',
                'string',
                'max:255',
                Rule::unique('cases', 'case_number')
                    ->ignore($this->route('case')),
            ],

            'title' => [
                'sometimes',
                'string',
                'max:255',
            ],

            'description' => [
                'sometimes',
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
