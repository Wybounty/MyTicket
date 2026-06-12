<?php

namespace Database\Seeders;

use App\Models\TypeProduit;
use Illuminate\Database\Seeder;

class TypeProduitSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            'Logiciel',
            'Matériel',
            'Service',
            'Réseau',
        ];

        foreach ($types as $libelle) {
            TypeProduit::firstOrCreate(['libelle' => $libelle]);
        }
    }
}
