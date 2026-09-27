<?php

namespace Database\Seeders;

use App\Models\CaseModel;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class CaseSeeder extends Seeder
{
    public function run(): void
    {
        $employees = Employee::query()->pluck('id');

        if ($employees->isEmpty()) {
            return;
        }

        CaseModel::factory()
            ->count(50)
            ->create()
            ->each(function (CaseModel $case) use ($employees) {
                // 1-2 PIC
                $picCount = min(
                    fake()->numberBetween(1, 2),
                    $employees->count()
                );

                $case->pics()->attach(
                    $employees->random($picCount)->all()
                );

                // 1-4 members
                $memberCount = min(
                    fake()->numberBetween(1, 4),
                    $employees->count()
                );

                $case->members()->attach(
                    $employees->random($memberCount)->all()
                );
            });
    }
}
