<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; //Se llama al controlador PageController que maneja la logica de el Blog
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

/**
 * Route::get     | Consultar
 * Route::post    | Guardar
 * Route::delete  | Eliminar
 * Route::put     | Actualizar
 */

//Se crea un grupo del controlador para almazenar mejor nuestras rutas

Route::controller(PageController::class)->group(function (){
    //El segundo parametro de la funcion get es el metodo que posee el Controlador PageController
    Route::get('/', "home")->name("home");
    Route::get('blog', "blog")->name("blog");
    Route::get('blog/{slug}', "post")->name("post");
});