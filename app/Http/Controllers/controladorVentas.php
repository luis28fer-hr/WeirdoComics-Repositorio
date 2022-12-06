<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarVentaDatos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controladorVentas extends Controller
{

    public function index()
    {

        return view('ventas');
    }

    public function create()
    {
        return view('parciales.ventas.agregar');
    }


    public function store(validarVentaDatos $req)
    {
        return redirect('ventas/agregar')
        ->with('confirmacion','Guardado')
        ->with('txtCodProducto',$req->txtCodProducto);
    }


    public function show()
    {
        return view('parciales.ventas.consultar');
    }


    public function edit()
    {
        return view('parciales.ventas.editar');
    }


    public function update(validarVentaDatos $req)
    {

        return redirect('ventas/consultar')
        ->with('confirmacion','Guardado')
        ->with('txtCodProducto',$req->txtCodProducto);
    }


    public function destroy($id)
    {
        //
    }
}
