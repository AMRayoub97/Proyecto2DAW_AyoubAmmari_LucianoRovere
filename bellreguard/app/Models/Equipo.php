<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $table = 'equipos';

    protected $fillable = [
        'nombre',
        'categoria',
        'genero',
        'entrenador',
    ];

    public function jugadores(){
        return $this->hasMany(Jugador::class, 'equipo_id');
    }

    public function estadisticaEquipo(){
        return $this->hasOne(EstadisticaEquipo::class, 'equipo_id');
    }

}
