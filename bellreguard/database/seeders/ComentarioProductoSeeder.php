<?php

namespace Database\Seeders;

use App\Models\ComentariosProducto;
use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComentarioProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comentario_producto')->truncate();
        $usuarios = Usuario::get();
        $productos = Producto::get();

        foreach($productos as $producto){
            foreach($usuarios as $usuario){
                ComentariosProducto::factory()->count(1)->create([
                    'usuario_id' => $usuario->id,
                    'producto_id' => $producto->id
                ]);
            }
        }
    }
}
