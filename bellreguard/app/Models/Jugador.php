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
        'equipo_id',
    ];

    public function estadisticas(){
        return $this->hasOne(EstadisticaJugador::class , 'jugador_id');
    }

    public function equipo(){
        return $this->belongsTo(Equipo::class, 'equipo_id');
    }
}
