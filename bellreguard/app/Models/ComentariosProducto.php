<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComentariosProducto extends Model
{
    use HasFactory;

    protected $table = 'comentario_producto';

    protected $fillable = [
        'producto_id',
        'contenido',
        'contenido',
        'puntuacion',
    ];

    public function usuario(){
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function producto(){
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
