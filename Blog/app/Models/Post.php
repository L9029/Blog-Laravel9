<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //Se agrega esta configuracion para que laravel detecte la relacion entre ambas tablas posts y users
    public function user(){
        return $this->belongsTo(User::class); //Con esto en la vista del blog, ya es posible retornar el nombre del creador del blog a la vista.
    }
}
