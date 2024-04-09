<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function home(Request $request){
        $search = $request->search; //Recupera el valor pasado por parametro

        //Se realiza una consulta a la base de datos para devolver un post y a su vez se indica que si se busca un nombre en especifico de un post el mismo sea filtrado por where()
        $posts = Post::where('title', 'LIKE', "%{$search}%")->with("user")->latest()->paginate(); //Con paginate se paginan los registros y with se encarga de traer el nombre del usuario perteneciente a ese post

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
