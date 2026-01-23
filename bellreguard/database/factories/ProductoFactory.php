<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genero = ['M','F','N'];
        $talla = ['S','M','L','XL','XXL','XXXL'];

        return [
            'nombre' => fake()->name(),
            'precio' => fake()->numberBetween(0, 150),
            'descripcion' => fake()->text(),
            'categoria' => $genero[rand(0,2)],
            'genero' => $genero[rand(0,2)],
            'talla' => $talla[rand(0,5)],
            'cantidad' => fake()->numberBetween(0, 200),
            'rate' => rand(0, 9)
        ];
    }
}
