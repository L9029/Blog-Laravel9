<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function home(){
        $posts = Post::first()->paginate(); //Con paginate se paginan los registros
        return view("home", ["posts" => $posts]);
    }

    // public function blog(){
    //     //Consulta a Base de datos
    //     //$posts = Post::get(); //Lista todos los posts en la vista

    //     // $posts = Post::first(); //Trae el primer registro de la tabla posts
    //     // dd($posts);
        
    //     // $post = Post::find(71); //Trae un Registro especificado por su id de la tabla posts
    //     // dd($post);

    //     //Se consultan los registros en orden descendente
    //     $posts = Post::first()->paginate(); //Con paginate se paginan los registros

    //     return view("blog", ["posts" => $posts]);
    // }

    public function post(Post $post){

        return view("post", ["post" => $post]);
    }
}
