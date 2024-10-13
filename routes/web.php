<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReservaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('inicio');
});

Route::get('/usuarios/sesion', [UsuarioController::class, 'sesion'])->name('usuarios.sesion');
Route::post('/usuarios/login', [UsuarioController::class, 'login'])->name('usuarios.login');

Route::get('/inicio', [UsuarioController::class, 'volver'])->name('inicio');


// Rutas de recursos para usuarios
Route::resource('usuarios', UsuarioController::class);
// Rutas de recursos para reservas
Route::resource('reservas', ReservaController::class);







