<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $fecha = Carbon::now('Europe/Madrid')->format('Y-m-d');
        $fechaP = Carbon::now('Europe/Madrid')->addDays(rand(1, 30))->format('Y-m-d');


        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('partidos')->truncate();

        DB::table('partidos')->insert([
            [
                'equipo_id' => 1,
                'equipo_visitante_id' => 2,
                'fecha' => '2025-10-05',
                'lugar' => 'Pabellón Municipal de Gandia',
                'estado' => 'finalizado',
                'resultado' => rand(0,30) . '-' . rand(0,30)
            ],
            [
                'equipo_id' => 3,
                'equipo_visitante_id' => 18,
                'fecha' => '2025-10-06',
                'lugar' => 'WiZink Center',
                'estado' => 'finalizado',
                'resultado' => rand(0,30) . '-' . rand(0,30)
            ],
            [
                'equipo_id' => 5,
                'equipo_visitante_id' => 33,
                'fecha' => '2025-10-12',
                'lugar' => 'Movistar Arena',
                'estado' => 'finalizado',
                'resultado' => rand(0,30) . '-' . rand(0,30)
            ],
            [
                'equipo_id' => 7,
                'equipo_visitante_id' => 18,
                'fecha' => $fecha,
                'lugar' => 'Palacio de Deportes de Granada',
                'estado' => 'en_vivo',
                'resultado' => rand(0,30) . '-' . rand(0,30)
            ],
            [
                'equipo_id' => 9,
                'equipo_visitante_id' => 37,
                'fecha' => $fecha,
                'lugar' => 'Nou Congost',
                'estado' => 'en_vivo',
                'resultado' => rand(0,30) . '-' . rand(0,30)
            ],
            [
                'equipo_id' => 1,
                'equipo_visitante_id' => 37,
                'fecha' => $fecha,
                'lugar' => 'La Fonteta',
                'estado' => 'en_vivo',
                'resultado' => rand(0,30) . '-' . rand(0,30)
            ],
            [
                'equipo_id' => 4,
                'equipo_visitante_id' => 20,
                'fecha' => $fecha,
                'lugar' => 'Palau Blaugrana',
                'estado' => 'en_vivo',
                'resultado' => rand(0,30) . '-' . rand(0,30)
            ],
            [
                'equipo_id' => 6,
                'equipo_visitante_id' => 29,
                'fecha' => $fechaP,
                'lugar' => 'Centro de Tecnificación Alicante',
                'estado' => 'proximamente',
                'resultado' => '-'
            ],
            [
                'equipo_id' => 8,
                'equipo_visitante_id' => 19,
                'fecha' => $fechaP,
                'lugar' => 'Martín Carpena',
                'estado' => 'proximamente',
                'resultado' => '-'
            ],
            [
                'equipo_id' => 6,
                'equipo_visitante_id' => 1,
                'fecha' => $fechaP,
                'lugar' => 'Bilbao Arena',
                'estado' => 'proximamente',
                'resultado' => '-'
            ],
            [
                'equipo_id' => 5,
                'equipo_visitante_id' => 42,
                'fecha' => $fechaP,
                'lugar' => 'WiZink Center',
                'estado' => 'proximamente',
                'resultado' => '-'
            ],
            [
                'equipo_id' => 4,
                'equipo_visitante_id' => 42,
                'fecha' => $fechaP,
                'lugar' => 'Movistar Arena',
                'estado' => 'proximamente',
                'resultado' => '-'
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
