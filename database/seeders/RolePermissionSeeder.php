<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Roles
        |--------------------------------------------------------------------------
        */

        $admin = Role::create([
            'name' => 'admin',
        ]);

        $lawyer = Role::create([
            'name' => 'lawyer',
        ]);

        $staff = Role::create([
            'name' => 'staff',
        ]);

        /*
        |--------------------------------------------------------------------------
        | Permissions
        |--------------------------------------------------------------------------
        */

        $permissions = [
            'view_dashboard',
            'manage_accounts',
            'manage_roles',
            'manage_permissions',
            'manage_cases',
            'manage_activities',
            'view_reports',
        ];

        $permissionModels = [];

        foreach ($permissions as $permission) {
            $permissionModels[$permission] = Permission::create([
                'name' => $permission,
            ]);
        }

        /*
        |--------------------------------------------------------------------------
        | Admin Permissions
        |--------------------------------------------------------------------------
        */

        $admin->permissions()->attach(
            array_values($permissionModels)
        );

        /*
        |--------------------------------------------------------------------------
        | Lawyer Permissions
        |--------------------------------------------------------------------------
        */

        $lawyer->permissions()->attach([
            $permissionModels['view_dashboard']->id,
            $permissionModels['manage_cases']->id,
            $permissionModels['manage_activities']->id,
            $permissionModels['view_reports']->id,
        ]);

        /*
        |--------------------------------------------------------------------------
        | Staff Permissions
        |--------------------------------------------------------------------------
        */

        $staff->permissions()->attach([
            $permissionModels['view_dashboard']->id,
            $permissionModels['manage_activities']->id,
        ]);
    }
}
