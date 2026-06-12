<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id('id_log');
            $table->enum('action', ['creation', 'modification', 'suppression'])->default('creation');
            $table->text('description');    
            $table->timestamp('date_action')->useCurrent();
            $table->foreignId('id_user')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();
            $table->foreignId('id_ticket')
                ->nullable()
                ->constrained('tickets', 'id_ticket')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
