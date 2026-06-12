<?php

namespace Database\Seeders;

use App\Models\Produit;
use App\Models\Role;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TicketSeeder extends Seeder
{
    public function run(): void
    {
        $produit = Produit::first();

        if (! $produit) {
            return;
        }

        $user = User::first();

        if (! $user) {
            return;
        }

        Ticket::firstOrCreate(
            ['reference_ticket' => 'TKT-2026-0001'],
            [
                'nom_demandeur' => 'Dupont',
                'prenom_demandeur' => 'Jean',
                'email_demandeur' => 'jean.dupont@example.com',
                'telephone_demandeur' => '0600000000',
                'sujet' => 'Problème de connexion',
                'description' => 'Impossible de se connecter à l\'application depuis ce matin.',
                'statut' => 'ouvert',
                'date_creation' => now(),
                'date_modification' => now(),
                'id_produit' => $produit->id_produit,
                'id_user' => $user->id,
            ]
        );
    }
}
