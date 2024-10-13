<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('inicio');
});

// Rutas de recursos para usuarios
Route::resource('usuarios', UsuarioController::class);