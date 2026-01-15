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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('equipos')->truncate();

        DB::table('equipos')->insert([
            ['nombre' => 'Senior Masculino', 'categoria' => 'Senior', 'genero' => 'M', 'entrenador' => 'Entrenador A', 'foto' => 'logo.png'],
            ['nombre' => 'Senior Femenino', 'categoria' => 'Senior', 'genero' => 'F', 'entrenador' => 'Entrenador B', 'foto' => 'logo.png'],
            ['nombre' => 'Juvenil Masculino', 'categoria' => 'Juvenil', 'genero' => 'M', 'entrenador' => 'Entrenador C', 'foto' => 'logo.png'],
            ['nombre' => 'Juvenil Femenino', 'categoria' => 'Juvenil', 'genero' => 'F', 'entrenador' => 'Entrenador D', 'foto' => 'logo.png'],
            ['nombre' => 'Cadete Masculino', 'categoria' => 'Cadete', 'genero' => 'M', 'entrenador' => 'Entrenador E', 'foto' => 'logo.png'],
            ['nombre' => 'Cadete Femenino', 'categoria' => 'Cadete', 'genero' => 'F', 'entrenador' => 'Entrenador F', 'foto' => 'logo.png'],
            ['nombre' => 'Alevín Masculino', 'categoria' => 'Alevín', 'genero' => 'M', 'entrenador' => 'Entrenador G', 'foto' => 'logo.png'],
            ['nombre' => 'Alevín Femenino', 'categoria' => 'Alevín', 'genero' => 'F', 'entrenador' => 'Entrenador H', 'foto' => 'logo.png'],
            ['nombre' => 'Benjamín Masculino', 'categoria' => 'Benjamín', 'genero' => 'M', 'entrenador' => 'Entrenador I', 'foto' => 'logo.png'],
            ['nombre' => 'Benjamín Femenino', 'categoria' => 'Benjamín', 'genero' => 'F', 'entrenador' => 'Entrenador J', 'foto' => 'logo.png'],
            ['nombre' => 'Prebenjamín Masculino', 'categoria' => 'Prebenjamín', 'genero' => 'M', 'entrenador' => 'Entrenador I', 'foto' => 'logo.png'],
            ['nombre' => 'Prebenjamín Femenino', 'categoria' => 'Prebenjamín', 'genero' => 'F', 'entrenador' => 'Entrenador J', 'foto' => 'logo.png'],
        
            ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
