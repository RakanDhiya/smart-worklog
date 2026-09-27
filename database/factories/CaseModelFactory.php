<?php

namespace Database\Factories;

use App\Models\CaseModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CaseModel>
 */
class CaseModelFactory extends Factory
{
    protected $model = CaseModel::class;

    public function definition(): array
    {
        return [
            'case_number' => 'CASE-' . fake()->unique()->numerify('######'),

            'title' => fake()->randomElement([
                'Login authentication issue',
                'Unable to access dashboard',
                'Email notification not received',
                'Employee profile update issue',
                'Leave request submission failed',
                'Incorrect employee information',
                'Password reset issue',
                'Attendance data is missing',
                'System performance issue',
                'Report generation failed',
                'Account access problem',
                'Document upload issue',
                'Permission configuration issue',
                'Application error on dashboard',
                'Data synchronization issue',
            ]),

            'description' => fake()->paragraph(),

            'status' => fake()->randomElement([
                'open',
                'in_progress',
                'resolved',
                'closed',
                'cancelled',
            ]),

            'priority' => fake()->randomElement([
                'low',
                'medium',
                'high',
                'urgent',
            ]),
        ];
    }
}
