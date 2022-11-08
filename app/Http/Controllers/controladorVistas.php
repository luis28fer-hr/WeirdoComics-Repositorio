<?php

namespace App\Http\Controllers;

use App\Http\Requests\procesarComic;
use App\Http\Requests\procesarUsuario;
use App\Http\Requests\ValidarArticulo;
use App\Http\Requests\validarVenta;
use App\Http\Requests\validarVentaDatos;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
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


        return redirect('usuarios/agregar');
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


        return redirect('inventario/agregar/comic');
    }
    public function procesarArticulo(ValidarArticulo $req){


        return redirect('inventario/agregar/articulo');
    }


    public function agregarArticulo(){
        return view('parciales.inventario.agregar_articulo');
    }
    public function consulatarArticulo(){
        return view('parciales.inventario.consultar_articulo');
    }

}
