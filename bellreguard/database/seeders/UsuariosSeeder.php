<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->truncate();// limpia la tabla

        $usuario = new Usuario();
        $usuario->nombre = 'admin';
        $usuario->apellidos = 'admin';
        $usuario->correo = 'admin';
        $usuario->password = bcrypt('admin');
        $usuario->save();
    }
}
