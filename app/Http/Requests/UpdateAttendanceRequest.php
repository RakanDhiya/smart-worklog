<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateAttendanceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $attendance = $this->route('attendance');

        return [
            'employee_id' => [
                'sometimes',
                'integer',
                'exists:employees,id',
            ],

            'date' => [
                'sometimes',
                'date',
                'date_format:Y-m-d',
                Rule::unique('attendances', 'date')
                    ->where(
                        fn($query) => $query->where(
                            'employee_id',
                            $this->employee_id
                                ?? $attendance?->employee_id
                        )
                    )
                    ->ignore($attendance?->id),
            ],

            'check_in' => [
                'sometimes',
                'nullable',
                'date',
            ],

            'check_out' => [
                'sometimes',
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
                'sometimes',
                'nullable',
                'string',
            ],
        ];
    }
}
