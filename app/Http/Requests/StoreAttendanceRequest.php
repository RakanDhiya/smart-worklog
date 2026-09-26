<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAttendanceRequest extends FormRequest
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

            'date' => [
                'required',
                'date',
                'date_format:Y-m-d',
                'unique:attendances,date,NULL,id,employee_id,' . $this->employee_id,
            ],

            'check_in' => [
                'nullable',
                'date',
            ],

            'check_out' => [
                'nullable',
                'date',
                'after_or_equal:check_in',
            ],

            'status' => [
                'sometimes',
                Rule::in([
                    'present',
                    'late',
                    'absent',
                    'on_leave',
                ]),
            ],

            'note' => [
                'nullable',
                'string',
            ],
        ];
    }
}
