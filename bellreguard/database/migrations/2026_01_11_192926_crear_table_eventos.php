<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->dateTime('fecha');
            $table->string('lugar');
            $table->enum('tipo', ['partido', 'entrenamiento', 'otro'])->default('partido');
            $table->enum('estado', ['proximamente', 'en_vivo', 'finalizado'])->default('proximamente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
