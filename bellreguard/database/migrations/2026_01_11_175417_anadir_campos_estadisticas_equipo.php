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
        Schema::table('estadisticas_equipo', function (Blueprint $table) {
            $table->integer('victorias');
            $table->integer('derrotas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('estadisticas_equipo', function (Blueprint $table) {
            $table->dropColumn('victorias');
            $table->dropColumn('derrotas');
        });
    }
};
