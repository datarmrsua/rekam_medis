<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminRoleSeeder extends Seeder
{
    public function run(): void
    {

        $role = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        $admin = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password')
            ]
        );

        $admin->assignRole($role);
    }
}
