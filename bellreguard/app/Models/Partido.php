<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    protected $table = 'partidos';


    protected $fillable = [
        'equipo_id',
        'equipo_visitante_id',
        'fecha',
        'lugar',
    ];

    /*Estadisticas*/
    public function estadistica(){
        return $this->hasOne(EstadisticaEquipo::class, 'partido_id');
    }

    /*equipoLocal*/
    public function equipo(){
        return $this->belongsTo(Equipo::class, 'equipo_id');
    }

    /*equipoVisitante*/
    public function equipoVisitante(){
        return $this->hasOne(Equipo::class, 'equipo_visitante_id');
    }
}
