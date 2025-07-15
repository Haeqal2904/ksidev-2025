<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'),
            ]
        );
        $user->assignRole('super_admin');

        $user = User::firstOrCreate(
            ['email' => 'user@user.com'],
            [
                'name' => 'User Account',
                'password' => Hash::make('password'),
            ]
        );
        $user->assignRole('user');
    }
}
