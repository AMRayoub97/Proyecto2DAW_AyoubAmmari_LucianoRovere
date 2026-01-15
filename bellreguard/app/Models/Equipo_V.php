<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo_V extends Model
{
    use HasFactory;

    protected $table = 'equipos_visitantes';

    protected $fillable = [
        'nombre',
        'categoria',
        'genero',
        'entrenador',
        'foto',
    ];

    public function partido(){
        return $this->hasMany(Partido::class, 'equipo_id');
    }

}


