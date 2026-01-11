<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('eventos')->truncate();

        DB::table('eventos')->insert([
            ['titulo' => 'Lakers vs Warriors', 'lugar' => 'Crypto.com Arena', 'tipo' => 'partido', 'estado' => 'proximamente', 'fecha' => '2026-01-15 21:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Bulls vs Celtics', 'lugar' => 'United Center', 'tipo' => 'partido', 'estado' => 'en_vivo', 'fecha' => '2026-01-11 19:30:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Knicks vs Nets', 'lugar' => 'Madison Square Garden', 'tipo' => 'partido', 'estado' => 'finalizado', 'fecha' => '2026-01-10 20:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Suns vs Nuggets', 'lugar' => 'Footprint Center', 'tipo' => 'partido', 'estado' => 'proximamente', 'fecha' => '2026-01-18 22:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Heat vs 76ers', 'lugar' => 'Kaseya Center', 'tipo' => 'partido', 'estado' => 'proximamente', 'fecha' => '2026-01-20 19:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Bucks vs Mavericks', 'lugar' => 'Fiserv Forum', 'tipo' => 'partido', 'estado' => 'proximamente', 'fecha' => '2026-01-22 20:30:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Clippers vs Kings', 'lugar' => 'Intuit Dome', 'tipo' => 'partido', 'estado' => 'finalizado', 'fecha' => '2026-01-08 18:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Rockets vs Spurs', 'lugar' => 'Toyota Center', 'tipo' => 'partido', 'estado' => 'proximamente', 'fecha' => '2026-01-25 21:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Grizzlies vs Pelicans', 'lugar' => 'FedExForum', 'tipo' => 'partido', 'estado' => 'proximamente', 'fecha' => '2026-01-28 20:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Hawks vs Magic', 'lugar' => 'State Farm Arena', 'tipo' => 'partido', 'estado' => 'finalizado', 'fecha' => '2026-01-05 19:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Pacers vs Raptors', 'lugar' => 'Gainbridge Fieldhouse', 'tipo' => 'partido', 'estado' => 'proximamente', 'fecha' => '2026-02-01 19:30:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Timberwolves vs Thunder', 'lugar' => 'Target Center', 'tipo' => 'partido', 'estado' => 'proximamente', 'fecha' => '2026-02-05 21:30:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Entrenamiento de Tiro', 'lugar' => 'Pista Secundaria', 'tipo' => 'entrenamiento', 'estado' => 'proximamente', 'fecha' => '2026-01-12 10:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Práctica Táctica', 'lugar' => 'Pabellón Central', 'tipo' => 'entrenamiento', 'estado' => 'proximamente', 'fecha' => '2026-01-13 11:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Sesión de Pesas', 'lugar' => 'Gimnasio Club', 'tipo' => 'entrenamiento', 'estado' => 'proximamente', 'fecha' => '2026-01-14 09:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Entrenamiento Rookies', 'lugar' => 'Pista 2', 'tipo' => 'entrenamiento', 'estado' => 'finalizado', 'fecha' => '2026-01-09 10:30:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Práctica Pre-Partido', 'lugar' => 'Pabellón Central', 'tipo' => 'entrenamiento', 'estado' => 'proximamente', 'fecha' => '2026-01-15 11:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Presentación Fichaje', 'lugar' => 'Sala de Prensa', 'tipo' => 'otro', 'estado' => 'proximamente', 'fecha' => '2026-01-16 12:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Entrevista Post-Partido', 'lugar' => 'Zona Mixta', 'tipo' => 'otro', 'estado' => 'finalizado', 'fecha' => '2026-01-11 22:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['titulo' => 'Conferencia All-Star', 'lugar' => 'Sala de Prensa', 'tipo' => 'otro', 'estado' => 'proximamente', 'fecha' => '2026-02-10 13:00:00', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
