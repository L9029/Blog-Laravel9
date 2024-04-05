<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Se inicializan las variables que seran tomadas por el modelo para crear o modificar el post
    protected $fillable = [
        'title',
        'slug',
        'body',
    ];

    //Se agrega esta configuracion para que laravel detecte la relacion entre ambas tablas posts y users
    public function user(){
        return $this->belongsTo(User::class); //Con esto en la vista del blog, ya es posible retornar el nombre del creador del blog a la vista.
    }
}
