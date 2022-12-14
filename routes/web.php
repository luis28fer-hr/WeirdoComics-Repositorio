<?php

use App\Http\Controllers\controladorArticulo;
use App\Http\Controllers\controladorComic;
use App\Http\Controllers\controladorInicio;
use App\Http\Controllers\controladorLogin;
use App\Http\Controllers\controladorMarca;
use App\Http\Controllers\controladorProovedor;
use App\Http\Controllers\controladorUsuarios;
use App\Http\Controllers\controladorVentas;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

/* Rutas para Login */
Route::get('login', [controladorLogin::class, 'index'])->name('login');
Route::post('login/acceder', [controladorLogin::class, 'signIn'])->name('login.acceder');

/* Rutas de inicio */
Route::get('inicio', [controladorInicio::class, 'index'])->name('inicio');

/*Rutas de usuario */
Route::get('usuarios', [controladorUsuarios::class, 'index'])->name('usuarios');
Route::get('usuarios/agregar', [controladorUsuarios::class, 'create'])->name('usuarios.agregar');
Route::post('usuarios/agregar/guardar', [controladorUsuarios::class, 'store'])->name('usuarios.guardar');
Route::get('usuarios/consultar', [controladorUsuarios::class, 'show'])->name('usuarios.consultar');
Route::post('usuarios/consultar/nombre', [controladorUsuarios::class, 'showNombre'])->name('usuarios.consultar.filtro');
Route::get('usuarios/editar/{id}', [controladorUsuarios::class, 'edit'])->name('usuarios.consultar.editar');
Route::post('usuarios/editar/actualizar/{id}', [controladorUsuarios::class, 'update'])->name('usuarios.consultar.editar.actualizar');
Route::put('usuarios/eliminar/{id}', [controladorUsuarios::class, 'destroy'])->name('usuarios.consultar.eliminar');
Route::get('usuarios/pdf', [controladorUsuarios::class, 'showPDF'])->name('usuarios.pdf');


/* Rutas de Ventas */
Route::get('ventas', [controladorVentas::class, 'index'])->name('ventas');
Route::post('ventas/añadir', [controladorVentas::class, 'add'])->name('ventas.añadir');
Route::get('ventas/agregar', [controladorVentas::class, 'create'])->name('ventas.agregar');
Route::post('ventas/agregar/guardar/comic{id}', [controladorVentas::class, 'storeComic'])->name('ventas.guardar.comic');
Route::post('ventas/agregar/guardar/articulo{id}', [controladorVentas::class, 'storeArticulo'])->name('ventas.guardar.articulo');

Route::get('ventas/consultar', [controladorVentas::class, 'show'])->name('ventas.consultar');
Route::post('ventas/consultar/nombre', [controladorVentas::class, 'showNombre'])->name('ventas.consultar.buscar');
Route::get('ventas/editar/{id}', [controladorVentas::class, 'edit'])->name('ventas.consultar.editar');
Route::post('ventas/editar/actualizar/comic/{id}', [controladorVentas::class, 'updateComic'])->name('ventas.consultar.editar.actualizar.comic');
Route::post('ventas/editar/actualizar/articulo/{id}', [controladorVentas::class, 'updateArticulo'])->name('ventas.consultar.editar.actualizar.articulo');
Route::put('ventas/eliminar/{id}', [controladorVentas::class, 'destroy'])->name('ventas.consultar.eliminar');
Route::get('ventas/pdf', [controladorVentas::class, 'showPDF'])->name('ventas.pdf');


/* Rutas para Inventario */
Route::get('inventario', [controladorComic::class, 'index'])->name('inventario');
Route::get('inventario/comic/agregar', [controladorComic::class, 'create'])->name('inventario.comic.agregar');
Route::post('inventario/comic/agregar/guardar', [controladorComic::class, 'store'])->name('inventario.comic.guardar');
Route::get('inventario/comic/consultar', [controladorComic::class, 'show'])->name('inventario.comic.consultar');
Route::post('inventario/comic/consultar/generar/pedido/{id}', [controladorComic::class, 'generarPedido'])->name('ventas.consultar.generarpedido');
Route::post('inventario/comic/consultar/nombre', [controladorComic::class, 'showNombre'])->name('inventario.comic.consultar.filtro');
Route::get('inventario/comic/editar/{id}', [controladorComic::class, 'edit'])->name('inventario.comic.consultar.editar');
Route::post('inventario/comic/editar/actualizar/{id}', [controladorComic::class, 'update'])->name('inventario.comic.consultar.editar.actualizar');
Route::put('inventario/comic/eliminar/{id}', [controladorComic::class, 'destroy'])->name('inventario.comic.consultar.eliminar');
Route::get('inventario/comic/pdf', [controladorComic::class, 'showPDF'])->name('inventario.comic.pdf');



Route::get('inventario/articulo/agregar', [controladorArticulo::class, 'create'])->name('inventario.articulo.agregar');
Route::post('inventario/articulo/agregar/guardar', [controladorArticulo::class, 'store'])->name('inventario.articulo.guardar');
Route::get('inventario/articulo/consultar', [controladorArticulo::class, 'show'])->name('inventario.articulo.consultar');
Route::post('inventario/articulo/consultar/generar/pedido/{id}', [controladorArticulo::class, 'generarPedido'])->name('inventario.articulo.consultar.generarpedido');

Route::post('inventario/articulo/consultar/nombre', [controladorArticulo::class, 'showNombre'])->name('inventario.articulo.consultar.filtro');
Route::get('inventario/articulo/editar/{id}', [controladorArticulo::class, 'edit'])->name('inventario.articulo.consultar.editar');
Route::post('inventario/articulo/editar/actualizar/{id}', [controladorArticulo::class, 'update'])->name('inventario.articulo.consultar.editar.actualizar');
Route::put('inventario/articulo/eliminar/{id}', [controladorArticulo::class, 'destroy'])->name('inventario.articulo.consultar.eliminar');
Route::get('inventario/articulo/pdf', [controladorArticulo::class, 'showPDF'])->name('inventario.articulo.pdf');



/* Rutas de agenda  */
Route::get('agenda', [controladorMarca::class, 'index'])->name('agenda');

Route::get('agenda/marca/agregar', [controladorMarca::class, 'create'])->name('agenda.marca.agregar');
Route::post('agenda/marca/agregar/guardar', [controladorMarca::class, 'store'])->name('agenda.marca.guardar');
Route::get('agenda/marca/consultar', [controladorMarca::class, 'show'])->name('agenda.marca.consultar');
Route::post('agenda/marca/consultar/nombre', [controladorMarca::class, 'showNombre'])->name('agenda.marca.consultar.filtro');
Route::get('agenda/marca/editar/{id}', [controladorMarca::class, 'edit'])->name('agenda.marca.consultar.editar');
Route::post('agenda/marca/editar/actualizar/{id}', [controladorMarca::class, 'update'])->name('agenda.marca.consultar.editar.actualizar');
Route::put('agenda/marca/eliminar/{id}', [controladorMarca::class, 'destroy'])->name('agenda.marca.consultar.eliminar');
Route::get('agenda/marca/pdf', [controladorMarca::class, 'showPDF'])->name('agenda.marca.pdf');


Route::get('agenda/proovedor/agregar', [controladorProovedor::class, 'create'])->name('agenda.proovedor.agregar');
Route::post('agenda/proovedor/agregar/guardar', [controladorProovedor::class, 'store'])->name('agenda.proovedor.guardar');
Route::get('agenda/proovedor/consultar', [controladorProovedor::class, 'show'])->name('agenda.proovedor.consultar');
Route::post('agenda/proovedor/consultar/nombre', [controladorProovedor::class, 'showNombre'])->name('agenda.proovedor.consultar.filtro');
Route::get('agenda/proovedor/editar/{id}', [controladorProovedor::class, 'edit'])->name('agenda.proovedor.consultar.editar');
Route::post('agenda/proovedor/editar/actualizar/{id}', [controladorProovedor::class, 'update'])->name('agenda.proovedor.consultar.editar.actualizar');
Route::put('agenda/proovedor/eliminar/{id}', [controladorProovedor::class, 'destroy'])->name('agenda.proovedor.consultar.eliminar');
Route::get('agenda/proovedor/pdf', [controladorProovedor::class, 'showPDF'])->name('agenda.proovedor.pdf');
