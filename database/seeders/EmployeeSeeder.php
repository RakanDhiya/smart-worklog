<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $employees = [
            [
                'email' => 'andi.pratama@example.com',
                'employee_code' => 'EMP-0001',
                'phone' => '081234567801',
                'position' => 'System Administrator',
                'department' => 'IT',
                'join_date' => '2024-01-15',
                'birth_date' => '1992-04-12',
                'gender' => 'male',
                'address' => 'Bogor, Jawa Barat',
            ],
            [
                'email' => 'siti.rahmawati@example.com',
                'employee_code' => 'EMP-0002',
                'phone' => '081234567802',
                'position' => 'HR Specialist',
                'department' => 'Human Resources',
                'join_date' => '2024-02-01',
                'birth_date' => '1994-08-20',
                'gender' => 'female',
                'address' => 'Depok, Jawa Barat',
            ],
            [
                'email' => 'budi.santoso@example.com',
                'employee_code' => 'EMP-0003',
                'phone' => '081234567803',
                'position' => 'Engineering Manager',
                'department' => 'IT',
                'join_date' => '2023-06-12',
                'birth_date' => '1988-11-05',
                'gender' => 'male',
                'address' => 'Jakarta Selatan',
            ],
            [
                'email' => 'dimas.saputra@example.com',
                'employee_code' => 'EMP-0004',
                'phone' => '081234567804',
                'position' => 'Software Engineer',
                'department' => 'IT',
                'join_date' => '2025-01-06',
                'birth_date' => '1998-05-10',
                'gender' => 'male',
                'address' => 'Bogor, Jawa Barat',
            ],
            [
                'email' => 'rina.maharani@example.com',
                'employee_code' => 'EMP-0005',
                'phone' => '081234567805',
                'position' => 'UI/UX Designer',
                'department' => 'Product',
                'join_date' => '2025-02-10',
                'birth_date' => '1997-03-18',
                'gender' => 'female',
                'address' => 'Depok, Jawa Barat',
            ],
            [
                'email' => 'fajar.ramadhan@example.com',
                'employee_code' => 'EMP-0006',
                'phone' => '081234567806',
                'position' => 'Backend Developer',
                'department' => 'IT',
                'join_date' => '2025-03-03',
                'birth_date' => '1996-09-22',
                'gender' => 'male',
                'address' => 'Jakarta Timur',
            ],
            [
                'email' => 'nadia.putri@example.com',
                'employee_code' => 'EMP-0007',
                'phone' => '081234567807',
                'position' => 'Finance Specialist',
                'department' => 'Finance',
                'join_date' => '2025-04-14',
                'birth_date' => '1995-12-02',
                'gender' => 'female',
                'address' => 'Bekasi, Jawa Barat',
            ],
            [
                'email' => 'rizky.kurniawan@example.com',
                'employee_code' => 'EMP-0008',
                'phone' => '081234567808',
                'position' => 'Frontend Developer',
                'department' => 'IT',
                'join_date' => '2025-05-19',
                'birth_date' => '1999-01-25',
                'gender' => 'male',
                'address' => 'Bogor, Jawa Barat',
            ],
        ];

        foreach ($employees as $data) {
            $user = User::where('email', $data['email'])->firstOrFail();

            Employee::create([
                'user_id' => $user->id,
                'employee_code' => $data['employee_code'],
                'phone' => $data['phone'],
                'position' => $data['position'],
                'department' => $data['department'],
                'join_date' => $data['join_date'],
                'birth_date' => $data['birth_date'],
                'gender' => $data['gender'],
                'address' => $data['address'],
                'status' => 'active',
            ]);
        }
    }
}
