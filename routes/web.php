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
    return view('index');
});
Route::get('login', [controladorVistas::class, 'login'])->name('Login');
Route::get('inicio', [controladorVistas::class, 'inicio'])->name('Inicio');
Route::get('usuarios', [controladorVistas::class, 'usuarios'])->name('Usuarios');
Route::get('ventas', [controladorVistas::class, 'ventas'])->name('Ventas');
Route::get('inventario', [controladorVistas::class, 'inventario'])->name('Inventario');
Route::get('agenda', [controladorVistas::class, 'agenda'])->name('Agenda');

/* Controlador de rutas de usuario */
Route::get('usuarios/agregar', [controladorVistas::class, 'agregarUsuario'])->name('UsuariosAgregar');
Route::get('usuarios/consultar', [controladorVistas::class, 'consultarUsuarios'])->name('UsuariosConsultar');
/* Ruta de editar */
Route::get('usuarios/consultar/editar', [controladorVistas::class, 'editarUsuario'])->name('UsuariosConsultarEditar');
    /* Procesar */
    Route::post('usuarios/agregar/procesar', [controladorVistas::class, 'procesarUsuarios'])->name('UsuariosProcesar');

/* Controlador de rutas de Ventas */
Route::get('ventas/agregar', [controladorVistas::class, 'agregarVenta'])->name('VentasAgregar');
Route::get('ventas/consultar', [controladorVistas::class, 'consultarVentas'])->name('VentasConsultar');
Route::get('ventas/consultar/editar', [controladorVistas::class, 'editarVentas'])->name('VentasEditar');

    Route::post('ventas/datos/venta', [controladorVistas::class, 'procesarDatosVenta'])->name('Venta_validar_datos');



/* Controlador de rutas para Inventario */
Route::get('inventario/agregar/comic', [controladorVistas::class, 'agregarComic'])->name('Inventario_Comic_A');
Route::get('inventario/consultar/comic', [controladorVistas::class, 'consulatarComic'])->name('Inventario_Comic_C');
Route::get('inventario/consultar/comic/editar', [controladorVistas::class, 'editarComic'])->name('Inventario_Comic_E');

    Route::post('inventario/agregar/procesar', [controladorVistas::class, 'procesarComic'])->name('Inventario_Comic_Procesar');

Route::get('inventario/agregar/articulo', [controladorVistas::class, 'agregarArticulo'])->name('Inventario_Articulo_A');
Route::get('inventario/consultar/articulo', [controladorVistas::class, 'consulatarArticulo'])->name('Inventario_Articulo_C');
Route::get('inventario/consultar/articulo/editar', [controladorVistas::class, 'editarArticulo'])->name('Inventario_Articulo_E');
Route::post('inventario/validar/articulo', [controladorVistas::class, 'procesarArticulo'])->name('Inventario_Validar_Articulo');

/* Controlador de rutas de agenda  */
Route::get('agenda/marca/agregar', [controladorVistas::class, 'agregarMarca'])->name('Agenda_Marca_Agregar');
Route::get('agenda/marca/consultar', [controladorVistas::class, 'consultarMarca'])->name('Agenda_Marca_Consultar');
Route::get('agenda/marca/consultar/editar', [controladorVistas::class, 'editarMarca'])->name('Agenda_Marca_Editar');
Route::post('agenda/marca/validar', [controladorVistas::class, 'validarMarca'])->name('Agenda_Marca_Validar');

Route::get('agenda/proovedor/agregar', [controladorVistas::class, 'agregarProovedor'])->name('Agenda_Proovedor_Agregar');
Route::get('agenda/proovedor/consultar', [controladorVistas::class, 'consultarProovedor'])->name('Agenda_Proovedor_Consultar');
Route::get('agenda/proovedor/consultar/editar', [controladorVistas::class, 'editarProovedor'])->name('Agenda_Proovedor_Editar');
Route::post('agenda/proovedor/validar', [controladorVistas::class, 'validarProovedor'])->name('Agenda_Validar_Proovedor');
