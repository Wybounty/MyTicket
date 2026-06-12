<?php

namespace Database\Seeders;

use App\Models\Produit;
use App\Models\TypeProduit;
use Illuminate\Database\Seeder;

class ProduitSeeder extends Seeder
{
    public function run(): void
    {
        $logiciel = TypeProduit::where('libelle', 'Logiciel')->first();
        $materiel = TypeProduit::where('libelle', 'Matériel')->first();

        if ($logiciel) {
            Produit::firstOrCreate(
                ['reference' => 'SW-001'],
                [
                    'nom_produit' => 'MyTicket Application',
                    'description' => 'Application de gestion de tickets support.',
                    'image' => null,
                    'id_type_produit' => $logiciel->id_type_produit,
                ]
            );
        }

        if ($materiel) {
            Produit::firstOrCreate(
                ['reference' => 'HW-001'],
                [
                    'nom_produit' => 'Poste de travail',
                    'description' => 'Ordinateur de bureau standard.',
                    'image' => null,
                    'id_type_produit' => $materiel->id_type_produit,
                ]
            );
        }
    }
}
