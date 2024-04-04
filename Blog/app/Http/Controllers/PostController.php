<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view("posts.index", [
            "posts" => Post::latest()->paginate(),
        ]); //Llama a la vista y muestra el listado de publicaciones
    }

    //Metodo para Eliminar los posts
    public function destroy(Post $post){
        $post->delete(); //Elimina el post

        return back(); //Devuelve al usuario a la pagina anterior
    }
}
