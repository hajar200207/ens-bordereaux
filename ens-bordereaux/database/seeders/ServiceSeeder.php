<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            ['name' => 'Direction', 'code' => 'DIR'],
            ['name' => 'Secrétariat général', 'code' => 'SG'],
            ['name' => 'Secrétariat directeur', 'code' => 'SD'],
            ['name' => 'Communication', 'code' => 'COM'],
            ['name' => 'Informatique', 'code' => 'INFO'],
            ['name' => 'Scolarité', 'code' => 'SCOL'],
            ['name' => 'Financier', 'code' => 'FIN'],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['code' => $service['code']],
                [
                    'name' => $service['name'],
                    'description' => null,
                    'is_active' => true,
                ]
            );
        }
    }
}
