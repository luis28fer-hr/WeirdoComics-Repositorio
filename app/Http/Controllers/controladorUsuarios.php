<?php

namespace App\Http\Controllers;

use App\Http\Requests\procesarUsuario;
use Illuminate\Http\Request;

class controladorUsuarios extends Controller
{
    public function index()
    {

        return view('usuarios');
    }

    public function create()
    {

        return view('parciales.usuarios.agregar');
    }

    public function store(procesarUsuario $req)
    {

        return redirect('usuarios/agregar')
        ->with('confirmacion','Guardado')
        ->with('nombre',$req->nombre);
    }

    public function show()
    {

        return view('parciales.usuarios.consultar');
    }

    public function edit()
    {

        return view('parciales.usuarios.editar');
    }

    public function update(procesarUsuario $req)
    {

        return redirect('usuarios/consultar')
        ->with('confirmacion','Guardado')
        ->with('nombre',$req->nombre);
    }

    public function destroy($id)
    {
        //
    }
}
