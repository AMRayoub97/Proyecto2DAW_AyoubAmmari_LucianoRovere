<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'precio',
        'descripcion',
        'foto',
        'categoria',
        'genero',
        'talla',
        'cantidad',
        'rate'
    ];

    public function comentarios(){
        return $this->hasMany(ComentariosProducto::class, 'producto_id');
    }
}
