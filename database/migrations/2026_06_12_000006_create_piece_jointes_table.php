<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('piece_jointes', function (Blueprint $table) {
            $table->id('id_piece');
            $table->string('nom_fichier');
            $table->string('chemin_fichier');
            $table->foreignId('id_ticket')
                ->constrained('tickets', 'id_ticket')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('piece_jointes');
    }
};
