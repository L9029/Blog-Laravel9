<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; //Se llama al controlador PageController que maneja la logica de el Blog
use App\Http\Controllers\PostController; //Se llama al controlador que manejara los posts en el dashboard del usuario

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
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
    Route::get('blog/{post:slug}', "post")->name("post"); //El parametro slug pasa a ser una propiedad de la tabla posts
});

// Rutas del sistema de inicio de sesion y el dashboard (Redireccion la vista del dashboard a los posts)
Route::redirect('/dashboard', "posts")->name('dashboard');

//Ruta del listado de publicaciones (Ahora protege a los posts que se muestran en el dashboard)
Route::resource("posts", PostController::class)->middleware(['auth', 'verified'])->except("show");


require __DIR__.'/auth.php';
