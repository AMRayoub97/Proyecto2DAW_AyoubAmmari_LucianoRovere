<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadisticaEquipo extends Model
{

    protected $table = 'estadisticas_equipo';


    protected $fillable = [
        'equipo_id',
        'partido_id',
        'tiros_2_anotados',
        'tiros_2_fallidos',
        'tiros_3_anotados',
        'tiros_3_fallidos',
        'tiros_libres_anotados',
        'tiros_libres_fallidos',
        'rebotes_ofensivos',
        'rebotes_defensivos',
        'faltas_personales',
        'perdidas',
        'robos',
        'victorias',
        'derrotas',
    ];

    //Equipo
    public function equipo(){
        return $this->belongsTo(Equipo::class, 'equipo_id');
    }

    //partido
    public function partido(){
        return $this->belongsTo(Partido::class, 'partido_id');
    }
}
