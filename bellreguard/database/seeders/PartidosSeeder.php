<?php

namespace Database\Seeders;

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

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('partidos')->truncate();

        DB::table('partidos')->insert([
            [
                'equipo_id' => 1,
                'equipo_visitante_id' => 2,
                'fecha' => '2024-10-05',
                'lugar' => 'Pabellón Municipal de Gandia',
            ],
            [
                'equipo_id' => 3,
                'equipo_visitante_id' => 4,
                'fecha' => '2024-10-06',
                'lugar' => 'WiZink Center',
            ],
            [
                'equipo_id' => 5,
                'equipo_visitante_id' => 6,
                'fecha' => '2024-10-12',
                'lugar' => 'Movistar Arena',
            ],
            [
                'equipo_id' => 7,
                'equipo_visitante_id' => 8,
                'fecha' => '2024-10-13',
                'lugar' => 'Palacio de Deportes de Granada',
            ],
            [
                'equipo_id' => 9,
                'equipo_visitante_id' => 10,
                'fecha' => '2024-10-19',
                'lugar' => 'Nou Congost',
            ],
            [
                'equipo_id' => 2,
                'equipo_visitante_id' => 3,
                'fecha' => '2024-10-20',
                'lugar' => 'La Fonteta',
            ],
            [
                'equipo_id' => 4,
                'equipo_visitante_id' => 5,
                'fecha' => '2024-10-26',
                'lugar' => 'Palau Blaugrana',
            ],
            [
                'equipo_id' => 6,
                'equipo_visitante_id' => 7,
                'fecha' => '2024-10-27',
                'lugar' => 'Centro de Tecnificación Alicante',
            ],
            [
                'equipo_id' => 8,
                'equipo_visitante_id' => 9,
                'fecha' => '2024-11-02',
                'lugar' => 'Martín Carpena',
            ],
            [
                'equipo_id' => 10,
                'equipo_visitante_id' => 1,
                'fecha' => '2024-11-03',
                'lugar' => 'Bilbao Arena',
            ],
            [
                'equipo_id' => 3,
                'equipo_visitante_id' => 7,
                'fecha' => '2024-11-09',
                'lugar' => 'WiZink Center',
            ],
            [
                'equipo_id' => 5,
                'equipo_visitante_id' => 2,
                'fecha' => '2024-11-10',
                'lugar' => 'Movistar Arena',
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
