<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id('id_ticket');
            $table->string('reference_ticket')->unique();
            $table->string('nom_demandeur');
            $table->string('prenom_demandeur');
            $table->string('email_demandeur');
            $table->string('telephone_demandeur');
            $table->string('sujet');
            $table->text('description');
            $table->enum('statut', ['ouvert', 'en_cours', 'terminé'])->default('ouvert');
            $table->timestamp('date_creation')->useCurrent();
            $table->timestamp('date_modification')->useCurrent()->useCurrentOnUpdate();
            $table->foreignId('id_produit')
                ->constrained('produits', 'id_produit')
                ->cascadeOnDelete();
            $table->foreignId('id_user')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
