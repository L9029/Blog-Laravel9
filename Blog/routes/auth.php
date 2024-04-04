<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

//Ruta del sistema de inicio de sesion
Route::middleware('guest')->group(function () {
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    //Ruta para la salida del usuario
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
