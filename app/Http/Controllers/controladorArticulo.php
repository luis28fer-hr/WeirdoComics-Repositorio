<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarArticulo;
use Illuminate\Http\Request;

class controladorArticulo extends Controller
{

    public function create()
    {
        return view('parciales.inventario.articulo.agregar');

    }


    public function store(ValidarArticulo $req)
    {

        return redirect('inventario/articulo/agregar')
        ->with('confirmacion','Guardado')
        ->with('txtnombre',$req->txtnombre);
    }

    public function show()
    {

        return view('parciales.inventario.articulo.consultar');
    }

    public function edit()
    {

        return view('parciales.inventario.articulo.editar');
    }

    public function update(ValidarArticulo $req)
    {
        return redirect('inventario/articulo/consultar')
        ->with('confirmacion','Guardado')
        ->with('txtnombre',$req->txtnombre);
    }

    public function destroy($id)
    {
        //
    }
}
