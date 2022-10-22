<?php

namespace App\Http\Controllers;

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


}
