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
        Schema::create('jugadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('foto')->nullable();
            $table->string('nacionalidad', 3);
            $table->enum('genero', ['M', 'F']);
            $table->integer('edad')->nullable();
            $table->integer('altura');
            $table->decimal('peso', 5, 2);
            $table->integer('experiencia');
            $table->decimal('puntuacion', 4, 2)->default(0.0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jugadores');
    }
};
