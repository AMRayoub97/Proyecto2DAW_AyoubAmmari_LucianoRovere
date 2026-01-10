<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('equipos')->truncate();

        DB::table('equipos')->insert([
            ['nombre' => 'UPB Gandia', 'categoria' => 'Profesional', 'genero' => 'M', 'entrenador' => 'Entrenador A', 'foto' => 'gandia.jpg'],
            ['nombre' => 'Valencia Basket', 'categoria' => 'Senior', 'genero' => 'M', 'entrenador' => 'Entrenador B', 'foto' => 'LogoValenciaBasket.png'],
            ['nombre' => 'Real Madrid Baloncesto', 'categoria' => 'Amateur', 'genero' => 'M', 'entrenador' => 'Entrenador C', 'foto' => 'madrid.jpg'],
            ['nombre' => 'FC Barcelona Basquet', 'categoria' => 'Profesional', 'genero' => 'M', 'entrenador' => 'Entrenador D', 'foto' => 'barcelona.jpeg'],
            ['nombre' => 'Movistar Estudiantes', 'categoria' => 'Amateur', 'genero' => 'M', 'entrenador' => 'Entrenador E', 'foto' => 'Movistarestudiantes.jpg'],
            ['nombre' => 'CB Lucentum Alicante', 'categoria' => 'Senior', 'genero' => 'M', 'entrenador' => 'Entrenador F', 'foto' => 'alicante.jpg'],
            ['nombre' => 'Covirán Granada', 'categoria' => 'Junior', 'genero' => 'M', 'entrenador' => 'Entrenador G', 'foto' => 'granada.png'],
            ['nombre' => 'Unicaja Málaga', 'categoria' => 'Profesional', 'genero' => 'M', 'entrenador' => 'Entrenador H', 'foto' => 'malaga.png'],
            ['nombre' => 'Basquet Manresa', 'categoria' => 'Junior', 'genero' => 'M', 'entrenador' => 'Entrenador I', 'foto' => 'manresa.png'],
            ['nombre' => 'Surne Bilbao Basket', 'categoria' => 'Senior', 'genero' => 'M', 'entrenador' => 'Entrenador J', 'foto' => 'bilbao.jpeg'],
        ]);

    }
}
