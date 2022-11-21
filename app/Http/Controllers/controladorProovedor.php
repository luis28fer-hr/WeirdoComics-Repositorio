<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarProovedor;
use Illuminate\Http\Request;

class controladorProovedor extends Controller
{

    public function create()
    {
        return view('parciales.agenda.proovedor.agregar');

    }

    public function store(validarProovedor $req)
    {
        return redirect('agenda/proovedor/agregar')
        ->with('confirmacion','Guardado')
        ->with('txtproovedor',$req->txtproovedor);
    }

    public function show()
    {
        return view('parciales.agenda.proovedor.consultar');
    }

    public function edit()
    {
        return view('parciales.agenda.proovedor.editar');
    }

    public function update(validarProovedor $req)
    {
        return redirect('agenda/proovedor/consultar')
        ->with('confirmacion','Guardado')
        ->with('txtproovedor',$req->txtproovedor);
    }


    public function destroy($id)
    {
        //
    }
}
