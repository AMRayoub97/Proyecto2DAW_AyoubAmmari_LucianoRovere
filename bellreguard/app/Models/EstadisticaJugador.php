<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class EstadisticaJugador extends Model
{
    use HasFactory;

    protected $table = 'estadisticas_jugador';


    protected $fillable = [
        'jugador_id',
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
    ];


    public function jugador(){
        return $this->belongsTo(Jugador::class, 'jugador_id');
    }


}
