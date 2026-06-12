<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            'Administrateur',
            'Technicien',
            'Client',
        ];

        foreach ($roles as $libelle) {
            Role::firstOrCreate(['libelle' => $libelle]);
        }
    }
}
