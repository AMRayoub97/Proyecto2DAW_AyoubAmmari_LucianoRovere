<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias';

    protected $fillable = [
        'titulo',
        'contenido',
        'fecha',
        'categoria',
        'foto',
        'tutor_id',
        'todo_contenido',
    ];

    public function tutor(){
        return $this->belongsTo(Usuario::class, 'tutor_id');
    }
}
