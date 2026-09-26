<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateActivityRequest extends FormRequest
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

            'case_id' => [
                'sometimes',
                'nullable',
                'integer',
                'exists:cases,id',
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

            'started_at' => [
                'sometimes',
                'nullable',
                'date',
            ],

            'ended_at' => [
                'sometimes',
                'nullable',
                'date',
                'after_or_equal:started_at',
            ],
        ];
    }
}
