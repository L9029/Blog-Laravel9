<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view("home");
    }

    public function blog(){
        //Consulta a Base de datos
        $posts = [
            ["id" => 1, "title" => "PHP", "slug" => "php"],
            ["id" => 2, "title" => "Laravel", "slug" => "laravel"]
        ];

        return view("blog", ["posts" => $posts]);
    }

    public function post($slug){
        //Consulta a Base de datos
        $post = $slug;

        return view("post", ["post" => $post]);
    }
}
