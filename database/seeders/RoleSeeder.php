<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'name' => 'Administrator',
            'slug' => 'admin',
            'description' => 'Full access to the system.',
        ]);

        Role::create([
            'name' => 'Human Resources',
            'slug' => 'hr',
            'description' => 'Manage employees and HR operations.',
        ]);

        Role::create([
            'name' => 'Manager',
            'slug' => 'manager',
            'description' => 'View and monitor employee activities.',
        ]);

        Role::create([
            'name' => 'Employee',
            'slug' => 'employee',
            'description' => 'Standard employee access.',
        ]);
    }
}
