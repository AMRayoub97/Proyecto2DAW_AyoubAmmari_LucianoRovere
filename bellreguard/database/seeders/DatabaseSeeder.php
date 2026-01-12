<?php

namespace Database\Seeders;

use App\Http\Controllers\LoginController;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/


        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call([
            UsuariosSeeder::class,
            EquiposSeeder::class,
            JugadoresSeeder::class,
            PartidosSeeder::class,
            EstadisticasEquipoSeeder::class,
            EstadisticasJugadorSeeder::class,
            EventosSeeder::class,
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }

}
