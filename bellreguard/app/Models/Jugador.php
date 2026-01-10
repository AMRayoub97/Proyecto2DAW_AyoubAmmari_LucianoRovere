<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table = 'jugadores';

    protected $fillable = [
        'nombre',
        'nacionalidad',
        'genero',
        'altura',
        'peso',
        'experiencia',
        'foto',
        'edad',
        'puntuacion',
    ];

    public function estadisticas(){
        return $this->hasOne(EstadisticaJugador::class , 'jugador_id');
    }
}
