<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JugadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('jugadores')->truncate();// limpia la tabla

        DB::table('jugadores')->insert([
            [
                'nombre' => 'Santi Aldama',
                'foto' => 'santi_aldama.jpeg',
                'nacionalidad' => 'ESP',
                'genero' => 'M',
                'edad' => 24,
                'altura' => 2.11,
                'peso' => 102.0,
                'experiencia' => 6,
                'puntuacion' => 8.5,
                'created_at' => now(),
                'updated_at' => now(),
                'equipo_id' => 1,
            ],
            [
                'nombre' => 'Darío Brizuela',
                'foto' => 'Darío_Brizuela.jpeg',
                'nacionalidad' => 'ESP',
                'genero' => 'M',
                'edad' => 30,
                'altura' => 1.88,
                'peso' => 86.0,
                'experiencia' => 11,
                'puntuacion' => 8.0,
                'created_at' => now(),
                'updated_at' => now(),
                'equipo_id' => 2,
            ],
            [
                'nombre' => 'Juancho Hernangómez',
                'foto' => 'Juancho_Hernangómez.png',
                'nacionalidad' => 'ESP',
                'genero' => 'M',
                'edad' => 29,
                'altura' => 2.06,
                'peso' => 100.0,
                'experiencia' => 10,
                'puntuacion' => 7.9,
                'created_at' => now(),
                'updated_at' => now(),
                'equipo_id' => 3,
            ],
            [
                'nombre' => 'Willy Hernangómez',
                'foto' => 'Willy_Hernangómez.jpg',
                'nacionalidad' => 'ESP',
                'genero' => 'M',
                'edad' => 30,
                'altura' => 2.11,
                'peso' => 113.0,
                'experiencia' => 11,
                'puntuacion' => 8.2,
                'created_at' => now(),
                'updated_at' => now(),
                'equipo_id' => 4,
            ],
            [
                'nombre' => 'Xabi López-Arostegui',
                'foto' => 'Xabi_Lopez-Arostegui.webp',
                'nacionalidad' => 'ESP',
                'genero' => 'M',
                'edad' => 27,
                'altura' => 2.00,
                'peso' => 95.0,
                'experiencia' => 8,
                'puntuacion' => 7.6,
                'created_at' => now(),
                'updated_at' => now(),
                'equipo_id' => 5,
            ],
            [
                'nombre' => 'Joel Parra',
                'foto' => 'Joel_Parra.jpg',
                'nacionalidad' => 'ESP',
                'genero' => 'M',
                'edad' => 25,
                'altura' => 2.02,
                'peso' => 98.0,
                'experiencia' => 6,
                'puntuacion' => 7.4,
                'created_at' => now(),
                'updated_at' => now(),
                'equipo_id' => 6,
            ],
            [
                'nombre' => 'Jaime Pradilla',
                'foto' => 'Jaime_Pradilla.webp',
                'nacionalidad' => 'ESP',
                'genero' => 'M',
                'edad' => 24,
                'altura' => 2.02,
                'peso' => 96.0,
                'experiencia' => 5,
                'puntuacion' => 7.3,
                'created_at' => now(),
                'updated_at' => now(),
                'equipo_id' => 7,
            ],
            [
                'nombre' => 'Josep Puerto',
                'foto' => 'Josep_Puerto.png',
                'nacionalidad' => 'ESP',
                'genero' => 'M',
                'edad' => 26,
                'altura' => 1.99,
                'peso' => 94.0,
                'experiencia' => 7,
                'puntuacion' => 7.1,
                'created_at' => now(),
                'updated_at' => now(),
                'equipo_id' => 8,
            ],
            [
                'nombre' => 'Santi Yusta',
                'foto' => 'Santi_Yusta.jpg',
                'nacionalidad' => 'ESP',
                'genero' => 'M',
                'edad' => 27,
                'altura' => 2.00,
                'peso' => 97.0,
                'experiencia' => 8,
                'puntuacion' => 7.2,
                'created_at' => now(),
                'updated_at' => now(),
                'equipo_id' => 9,
            ],
            [
                'nombre' => 'Yankuba Sima',
                'foto' => 'Yankuba_Sima.jpg',
                'nacionalidad' => 'ESP',
                'genero' => 'M',
                'edad' => 28,
                'altura' => 2.11,
                'peso' => 110.0,
                'experiencia' => 9,
                'puntuacion' => 7.8,
                'created_at' => now(),
                'updated_at' => now(),
                'equipo_id' => 10,
            ],
            [
                'nombre' => 'Sergio De Larrea',
                'foto' => 'Sergio_de_Larrea.webp',
                'nacionalidad' => 'ESP',
                'genero' => 'M',
                'edad' => 19,
                'altura' => 1.93,
                'peso' => 85.0,
                'experiencia' => 2,
                'puntuacion' => 6.8,
                'created_at' => now(),
                'updated_at' => now(),
                'equipo_id' => 2,
            ],
            [
                'nombre' => 'Mario Saint-Supéry',
                'foto' => 'Mario_Saint-Supery.png',
                'nacionalidad' => 'ESP',
                'genero' => 'M',
                'edad' => 18,
                'altura' => 1.95,
                'peso' => 88.0,
                'experiencia' => 2,
                'puntuacion' => 6.7,
                'created_at' => now(),
                'updated_at' => now(),
                'equipo_id' => 3,
            ],
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

}
