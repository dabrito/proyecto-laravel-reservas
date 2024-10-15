<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\TipoMesaController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('inicio');
});

Route::get('/usuarios/sesion', [UsuarioController::class, 'sesion'])->name('usuarios.sesion');
Route::post('/usuarios/login', [UsuarioController::class, 'login'])->name('usuarios.login');

Route::get('/usuarios/crearCliente', [UsuarioController::class, 'crearCliente'])->name('usuarios.crearCliente');
Route::post('/usuarios/storeCliente', [UsuarioController::class, 'storeCliente'])->name('usuarios.storeCliente');
Route::get('/usuarios/verClientes', [UsuarioController::class, 'verClientes'])->name('usuarios.verClientes');


Route::get('/inicio', [UsuarioController::class, 'volver'])->name('inicio');

Route::get('/reservas/clientes', [ReservaController::class, 'indexClientes'])->name('reservas.indexClientes');


// Rutas de recursos para usuarios
Route::resource('usuarios', UsuarioController::class);
// Rutas de recursos para reservas
Route::resource('reservas', ReservaController::class);
// Rutas de recursos para mesas
Route::resource('mesas', MesaController::class);
// Rutas de recursos para tiposmesas
Route::resource('tiposmesas', TipoMesaController::class);







