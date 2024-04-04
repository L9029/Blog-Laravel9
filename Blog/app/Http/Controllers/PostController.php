<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view("posts.index"); //Llama a la vista que muestra el listado de publicaciones
    }
}
