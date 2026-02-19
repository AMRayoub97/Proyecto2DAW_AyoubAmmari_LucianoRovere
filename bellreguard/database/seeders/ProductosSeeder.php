<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            [
                'nombre' => 'Air Jordan 1 2022',
                'foto' =>'jordan.avif'
            ],
            [
                'nombre' => 'Air Jordan 1 Mid SE Zapatillas',
                'foto' =>'jordan2.avif'
            ],
            [
                'nombre' => 'Mochila Nike Academy Negro',
                'foto' =>'mochila-nike-academy_0364878_00_5_548813159.jpg'
            ],
            [
                'nombre' => 'Mochila Nike Heritage (25L)',
                'foto' =>'mochila-nike-heritage-25l-jade-horizon-jade-horizon-white-0.webp'
            ],
            [
                'nombre' => 'Zapatillas Nike Air Max',
                'foto' =>'zapatillas-nike-air-max-intrlk-lite-negro-mujer.webp'
            ],
            [
                'nombre' => 'Nike Sportswear Club Fleece',
                'foto' =>'nike-sportswear-club-fleece-pantalones-de-deporte.jpg'
            ],
            [
                'nombre' => 'Nike Chaqueta Fibras Park 20',
                'foto' =>'nike-chaqueta-fibras-park-20-fall-negro-black-hombre.jpg'
            ],
            [
                'nombre' => 'Adidas Chaqueta',
                'foto' =>'27350255_57247211_1000.webp'
            ],
            [
                'nombre' => 'adidas Sportswear ESSENTIALS WARM-UP',
                'foto' =>'0b938c21fec34d38810fbc36bfccd13e.webp'
            ],
            [
                'nombre' => 'ADIDAS RUNFALCON ',
                'foto' =>'3535155-large_default.jpg'
            ],
            [
                'nombre' => 'adidas Performance RUNFALCON 5',
                'foto' =>'16375dfd7de548a28eff66620ce59619.webp'
            ],

        ];

        foreach($productos as $producto){
            Producto::factory()->count(1)->create([
                'nombre' => $producto['nombre'],
                'foto' => $producto['foto'],
            ]);
        };

    }
}
