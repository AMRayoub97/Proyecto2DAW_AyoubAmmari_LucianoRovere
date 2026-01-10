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
        Schema::table('estadisticas_jugador', function (Blueprint $table) {
            $table->decimal('pts_partido', 5, 1);
            $table->decimal('rebotes_partido', 5, 1);
            $table->decimal('asistencias_partido', 5, 1);
            $table->decimal('fg_porcentaje', 5, 1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('estadisticas_jugador', function (Blueprint $table) {
             $table->dropColumn(['pts', 'reb', 'ast', 'fg_porcentaje']);
        });
    }
};
