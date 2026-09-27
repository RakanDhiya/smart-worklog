<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = Role::where('slug', 'admin')->firstOrFail();
        $hr = Role::where('slug', 'hr')->firstOrFail();
        $manager = Role::where('slug', 'manager')->firstOrFail();
        $employee = Role::where('slug', 'employee')->firstOrFail();

        User::create([
            'name' => 'Andi Pratama',
            'email' => 'andi.pratama@example.com',
            'password' => 'password',
            'role_id' => $admin->id,
        ]);

        User::create([
            'name' => 'Siti Rahmawati',
            'email' => 'siti.rahmawati@example.com',
            'password' => 'password',
            'role_id' => $hr->id,
        ]);

        User::create([
            'name' => 'Budi Santoso',
            'email' => 'budi.santoso@example.com',
            'password' => 'password',
            'role_id' => $manager->id,
        ]);

        User::create([
            'name' => 'Dimas Saputra',
            'email' => 'dimas.saputra@example.com',
            'password' => 'password',
            'role_id' => $employee->id,
        ]);

        User::create([
            'name' => 'Rina Maharani',
            'email' => 'rina.maharani@example.com',
            'password' => 'password',
            'role_id' => $employee->id,
        ]);

        User::create([
            'name' => 'Fajar Ramadhan',
            'email' => 'fajar.ramadhan@example.com',
            'password' => 'password',
            'role_id' => $employee->id,
        ]);

        User::create([
            'name' => 'Nadia Putri',
            'email' => 'nadia.putri@example.com',
            'password' => 'password',
            'role_id' => $employee->id,
        ]);

        User::create([
            'name' => 'Rizky Kurniawan',
            'email' => 'rizky.kurniawan@example.com',
            'password' => 'password',
            'role_id' => $employee->id,
        ]);
    }
}
