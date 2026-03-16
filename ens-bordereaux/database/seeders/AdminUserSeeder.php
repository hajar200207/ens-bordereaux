<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $directionService = Service::where('code', 'DIR')->first();

        $admin = User::updateOrCreate(
            ['email' => 'admin@ensrabat.ma'],
            [
                'first_name' => 'Admin',
                'last_name' => 'ENS',
                'name' => 'Admin ENS',
                'username' => 'admin',
                'email' => 'admin@ensrabat.ma',
                'password' => Hash::make('Admin@12345'),
                'service_id' => $directionService?->id,
                'is_active' => true,
                'email_verified_at' => now(),
            ]
        );

        $admin->syncRoles(['admin']);
    }
}
