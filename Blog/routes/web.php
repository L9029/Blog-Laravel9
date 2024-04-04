<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; //Se llama al controlador PageController que maneja la logica de el Blog

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

// Rutas del sistema de inicio de sesion y el dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
