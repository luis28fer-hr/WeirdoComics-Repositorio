<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadBuscar;
use App\Http\Requests\validarProovedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class controladorProovedor extends Controller
{

    public function create()
    {

        return view('parciales.agenda.proovedor.agregar');
    }

    public function store(validarProovedor $req)
    {
        DB::table('tb_proveedores')->insert([
            "nombre"=>$req->input('txtproovedor'),
            "municipio"=>$req->input('txtmunicipio'),
            "contacto"=>$req->input('txtcontacto'),
            "numeroFijo"=>$req->input('txtnumero'),
            "cel"=>$req->input('txtcelular'),
            "correo"=>$req->input('txtcorreo'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('agenda/proovedor/agregar')
        ->with('confirmacion','Guardado')
        ->with('txtproovedor',$req->txtproovedor);
    }

    public function show()
    {

        $consulProvedor=DB::table('tb_proveedores')->get();
        return view('parciales.agenda.proovedor.consultar',compact('consulProvedor'));
    }

    public function showNombre(validadBuscar $req)
    {
        $nombre = $req->input('txtnombre');
        $consulProvedor=DB::select('select * from tb_proveedores where nombre like ?', ['%'.$nombre.'%']);

        return view('parciales.agenda.proovedor.consultar',compact('consulProvedor'));
    }

    public function showPDF()
    {

        $consulProvedor=DB::table('tb_proveedores')->get();

        $pdf = PDF::loadView('parciales.agenda.proovedor.pdf', compact('consulProvedor'));

        return $pdf->stream();
    }

    public function edit($id)
    {
        $consulProvedor=DB::table('tb_proveedores')->where('idProveedor', $id)->first();
        return view('parciales.agenda.proovedor.editar',compact('consulProvedor'));
    }

    public function update(validarProovedor $req, $id)
    {
        DB::table('tb_proveedores')->where('idProveedor', $id)->update([
            "nombre"=>$req->input('txtproovedor'),
            "municipio"=>$req->input('txtmunicipio'),
            "contacto"=>$req->input('txtcontacto'),
            "numeroFijo"=>$req->input('txtnumero'),
            "cel"=>$req->input('txtcelular'),
            "correo"=>$req->input('txtcorreo'),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('agenda/proovedor/consultar')
        ->with('confirmacion','Guardado')
        ->with('txtproovedor',$req->txtproovedor);
    }


    public function destroy()
    {
        return redirect('agenda/proovedor/consultar')
        ->with('eliminacion','texto');
        
    }
}
