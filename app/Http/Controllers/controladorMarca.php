<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarMarca;
use Illuminate\Http\Request;

class controladorMarca extends Controller
{

    public function index()
    {
        return view('agenda');
    }

    public function create()
    {

        return view('parciales.agenda.marca.agregar');
    }

    public function store(validarMarca $req)
    {

        return redirect('agenda/marca/agregar')
        ->with('confirmacion','Guardado')
        ->with('txtnombre',$req->txtnombre);
    }

    public function show()
    {

        return view('parciales.agenda.marca.consultar');
    }

    public function edit()
    {

        return view('parciales.agenda.marca.editar');
    }

    public function update(validarMarca $req)
    {
        return redirect('agenda/marca/consultar')
        ->with('confirmacion','Guardado')
        ->with('txtnombre',$req->txtnombre);
    }

    public function destroy($id)
    {
        //
    }
}
