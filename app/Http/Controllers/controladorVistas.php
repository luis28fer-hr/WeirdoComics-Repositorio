<?php

namespace App\Http\Controllers;

use App\Http\Requests\procesarComic;
use App\Http\Requests\procesarUsuario;
use App\Http\Requests\ValidarArticulo;
use App\Http\Requests\validarMarca;
use App\Http\Requests\validarVenta;
use App\Http\Requests\validarVentaDatos;
use App\Http\Requests\validarProovedor;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{

    public function login(){
        return view('index');
    }

    public function inicio(){
        return view('menu');
    }
    public function usuarios(){
        return view('usuarios');
    }
    public function ventas()
    {
        return view('ventas');
    }
    public function inventario(){
        return view('inventario');
    }
    public function agenda(){
        return view('agenda');
    }


    /* Controlador de vistas Usuario */
    public function agregarUsuario(){
        return view('parciales.usuarios.agregar_usuario');
    }
    public function consultarUsuarios(){
        return view('parciales.usuarios.consultar_usuarios');
    }

    public function procesarUsuarios(procesarUsuario $req){
        return redirect('usuarios/agregar')
        ->with('confirmacion','Guardado')
        ->with('nombre',$req->nombre);
    }


    /* Controlador de vistas Ventas */
    public function agregarVenta(){
        return view('parciales.ventas.agregar_venta');
    }
    public function consultarVentas(){
        return view('parciales.ventas.consultar_ventas');
    }
        /* Validaciones del formulario */
    public function procesarDatosVenta(validarVentaDatos $req){


        return redirect('ventas/agregar');
    }



    /* Controlador de vistas Inventario */
    public function agregarComic(){
        return view('parciales.inventario.agregar_comic');
    }
    public function consulatarComic(){
        return view('parciales.inventario.consultar_comic');
    }
    public function procesarComic(procesarComic $req){
        return redirect('inventario/agregar/comic')
        ->with('confirmacion','Guardado')
        ->with('nombre',$req->nombre);
    }

    public function agregarArticulo(){
        return view('parciales.inventario.agregar_articulo');
    }
    public function consulatarArticulo(){
        return view('parciales.inventario.consultar_articulo');
    }
    public function procesarArticulo(ValidarArticulo $req){
        return redirect('inventario/agregar/articulo')
        ->with('confirmacion','Guardado')
        ->with('txtnombre',$req->txtnombre);
    }

    /* Controlador de Agenda */

    public function agregarMarca(){
        return view('parciales.agenda.agregar_marca');
    }
    public function consultarMarca(){
        return view('parciales.agenda.consultar_marca');
    }
    public function validarMarca(validarMarca $re){

        return redirect('agenda/marca/agregar');
    }

    public function agregarProovedor(){
        return view('parciales.agenda.agregar_proovedor');
    }
    public function consultarProovedor(){
        return view('parciales.agenda.consultar_proovedor');
    }
    public function validarProovedor(validarProovedor $re){

        return redirect('agenda/proovedor/agregar');
    }



}
