<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@ensrabat.ma'],
            [
                'name' => 'Admin ENS',
                'email' => 'admin@ensrabat.ma',
                'password' => Hash::make('Admin@12345'),
                'role' => 'admin',
                'is_admin' => true,
                'email_verified_at' => now(),
            ]
        );
    }
}
