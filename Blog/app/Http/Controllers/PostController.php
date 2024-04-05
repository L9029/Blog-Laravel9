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

    //Methodo para crear un Post
    public function create(){
        return view("posts.create"); //Llama a la vista para crear un nuevo post
    }

    //Methodo para Editar un Post
    public function edit(Post $post){
        return view("posts.edit", ["post" => $post]); //Llama a la vista para editar un post en especifico
    }

    //Metodo para Eliminar los posts
    public function destroy(Post $post){
        $post->delete(); //Elimina el post

        return back(); //Devuelve al usuario a la pagina anterior
    }
}
