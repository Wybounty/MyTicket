<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id('id_produit');
            $table->string('reference')->unique();
            $table->string('nom_produit')->unique();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('id_type_produit')
                ->constrained('type_produits', 'id_type_produit')
                ->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
