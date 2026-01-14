<?php

namespace App\Models;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Container\Attributes\Authenticated as AttributesAuthenticated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $table = 'usuarios';

    protected $fillable = [
        'correo',
        'password',
        'nombre',
        'apellidos',
        'genero',
        'nacionalidad',
        'fecha_nacimiento',
        'telefono',
        'foto',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function getAuthIdentifierName()
    {
        return 'correo';
    }

    public function noticia(){
        return $this->hasMany(Noticia::class, 'tutor_id');
    }
}
