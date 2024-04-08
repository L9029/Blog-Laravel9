<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        return view("posts.index", [
            "posts" => Post::latest()->paginate(),
        ]); //Llama a la vista y muestra el listado de publicaciones
    }

    //Methodo para crear un Post
    public function create(Post $post){
        return view("posts.create", ["post" => $post]); //Llama a la vista para crear un nuevo post iniciando una nueva instancia del mismo pasada por parametro
    }

    //Methodo para Editar un Post
    public function edit(Post $post){
        return view("posts.edit", ["post" => $post]); //Llama a la vista para editar un post en especifico
    }

    //Methodo para Guardar un Post Nuevo o Editado
    public function store(Request $request){

        //Validacion de envio de formulario con datos duplicados o vacios
        $request->validate([
            "title" => "required",
            "slug" => "required|unique:posts,slug", //Indica que el valor enviando debe de ser unico y valida si el mismo ya existe en la columna slug de la tabla posts
            "body" => "required"
        ]);

        $post = $request->user()->posts()->create([
            "title" => $request->title,
            "slug" => $request->slug,
            "body" => $request->body
        ]);

        return redirect()->route("posts.edit", $post); //Redirecciona el parametro post a la ruta de editar post
    }

    //Methodo para actualizar un posts que fue editado
    public function update(Request $request, Post $post){
        
        //Validacion de envio de formulario con datos duplicados o vacios
        $request->validate([
            "title" => "required",
            "slug" => "required|unique:posts,slug," . $post->id, //Indica que el valor enviando debe de ser unico y valida si el mismo ya existe en la columna slug de la tabla posts pero que omita el mismo a la hora de editar un post
            "body" => "required"
        ]);

        //Recibe dos instancias, una con el contenido del Post y otra con los cambios enviados desde el formulario edit
        $post->update([
            "title" => $request->title,
            "slug" => $request->slug,
            "body" => $request->body
        ]);
    
        return redirect()->route("posts.edit", $post); //Redirecciona el parametro post a la ruta de editar post
    }

    //Metodo para Eliminar los posts
    public function destroy(Post $post){
        $post->delete(); //Elimina el post

        return back(); //Devuelve al usuario a la pagina anterior
    }
}
