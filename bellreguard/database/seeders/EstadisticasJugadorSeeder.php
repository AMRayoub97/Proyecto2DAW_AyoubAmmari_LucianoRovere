<?php

namespace Database\Seeders;

use App\Models\EstadisticaJugador;
use App\Models\Jugador;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadisticasJugadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Limpiar tabla
        DB::table('estadisticas_jugador')->truncate();


       Jugador::all()->each(function ($jugador) {
            $jugador->estadisticas()->create(
                EstadisticaJugador::factory()->make()->toArray()
            );
        });


        // Reactivar las FK
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
