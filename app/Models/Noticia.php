<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    // Nombre de la tabla (opcional si sigue la convención de nombres de Laravel)
    protected $table = 'noticias';

    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'titulo',
        'imagen',
        'descripcion',
    ];
}
