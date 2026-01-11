<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = "eventos";

    protected $fillable = [
        'titulo',
        'fecha',
        'lugar',
        'tipo',
        'estado',
    ];
}
