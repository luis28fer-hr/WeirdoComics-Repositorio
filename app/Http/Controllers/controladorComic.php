<?php

namespace App\Http\Controllers;

use App\Http\Requests\procesarComic;
use Illuminate\Http\Request;

class controladorComic extends Controller
{

    public function index()
    {
        return view('inventario');
    }

    public function create()
    {

        return view('parciales.inventario.comic.agregar');
    }

    public function store(procesarComic $req)
    {

        return redirect('inventario/comic/agregar')
        ->with('confirmacion','Guardado')
        ->with('nombre',$req->nombre);
    }

    public function show()
    {

        return view('parciales.inventario.comic.consultar');
    }

    public function edit()
    {

        return view('parciales.inventario.comic.editar');
    }

    public function update(procesarComic $req)
    {

        return redirect('inventario/comic/consultar')
        ->with('confirmacion','Guardado')
        ->with('nombre',$req->nombre);
    }

    public function destroy($id)
    {
        //
    }
}
