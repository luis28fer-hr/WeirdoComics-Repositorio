<?php

use App\Http\Controllers\controladorVistas;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio', [controladorVistas::class, 'inicio'])->name('Inicio');
Route::get('usuarios', [controladorVistas::class, 'usuarios'])->name('Usuarios');
Route::get('ventas', [controladorVistas::class, 'ventas'])->name('Ventas');
Route::get('inventario', [controladorVistas::class, 'inventario'])->name('Inventario');
Route::get('agenda', [controladorVistas::class, 'agenda'])->name('Agenda');

/* Controlador de vistas de usuario */
Route::get('usuarios/agregar', [controladorVistas::class, 'agregarUsuario'])->name('UsuariosAgregar');
Route::get('usuarios/consultar', [controladorVistas::class, 'consultarUsuarios'])->name('UsuariosConsultar');
