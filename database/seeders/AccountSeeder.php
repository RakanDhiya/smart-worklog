<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    public function run(): void
    {
        Account::create([
            'full_name' => 'Administrator',
            'email' => 'admin@smartworklog.test',
            'password' => Hash::make('password'),
            'position' => 'Administrator',
            'role_id' => 1,
        ]);
    }
}
