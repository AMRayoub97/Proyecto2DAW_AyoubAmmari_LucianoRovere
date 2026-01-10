<?php

namespace Database\Factories;

use App\Models\EstadisticaJugador;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstadisticaJugadorFactory extends Factory
{
    protected $model = EstadisticaJugador::class;

    public function definition(): array
    {
        return [
            'tiros_2_anotados' => $this->faker->numberBetween(50, 300),
            'tiros_2_fallidos' => $this->faker->numberBetween(20, 150),
            'tiros_3_anotados' => $this->faker->numberBetween(20, 200),
            'tiros_3_fallidos' => $this->faker->numberBetween(20, 150),
            'tiros_libres_anotados' => $this->faker->numberBetween(10, 200),
            'tiros_libres_fallidos' => $this->faker->numberBetween(5, 50),
            'rebotes_ofensivos' => $this->faker->numberBetween(10, 80),
            'rebotes_defensivos' => $this->faker->numberBetween(50, 300),
            'faltas_personales' => $this->faker->numberBetween(10, 50),
            'perdidas' => $this->faker->numberBetween(10, 80),
            'robos' => $this->faker->numberBetween(5, 60),
            'pts_partido' => $this->faker->randomFloat(1, 5, 30),
            'rebotes_partido' => $this->faker->randomFloat(1, 2, 15),
            'asistencias_partido' => $this->faker->randomFloat(1, 1, 10),
            'fg_porcentaje' => $this->faker->randomFloat(1, 35, 60),
        ];
    }
}
