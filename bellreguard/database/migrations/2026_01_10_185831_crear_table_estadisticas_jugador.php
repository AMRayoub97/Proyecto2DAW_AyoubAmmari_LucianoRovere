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
         Schema::create('estadisticas_jugador', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jugador_id')->constrained('jugadores')->onDelete('cascade');
            $table->integer('tiros_2_anotados');
            $table->integer('tiros_2_fallidos');
            $table->integer('tiros_3_anotados');
            $table->integer('tiros_3_fallidos');
            $table->integer('tiros_libres_anotados');
            $table->integer('tiros_libres_fallidos');
            $table->integer('rebotes_ofensivos');
            $table->integer('rebotes_defensivos');
            $table->integer('faltas_personales');
            $table->integer('perdidas');
            $table->integer('robos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estadisticas_jugador');
    }

};
