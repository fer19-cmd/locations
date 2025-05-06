<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    // Atributos que se pueden asignar masivamente (mass assignment)
    protected $fillable = [
        'code', // Código identificador único de la sede
        'name', // Nombre de la sede
        'image', // URL de la imagen de la sede
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
