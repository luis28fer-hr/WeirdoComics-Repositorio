<?php

namespace App\Http\Controllers;

use App\Http\Requests\procesarUsuario;
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


    /* Controlador de vistas Inventario */
    public function agregarComic(){
        return view('parciales.inventario.agregar_comic');
    }
    public function consulatarComic(){
        return view('parciales.inventario.consultar_comic');
    }

    public function agregarArticulo(){
        return view('parciales.inventario.agregar_articulo');
    }
    public function consulatarArticulo(){
        return view('parciales.inventario.consultar_articulo');
    }

}
