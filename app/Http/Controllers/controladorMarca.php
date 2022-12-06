<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadBuscar;
use App\Http\Requests\validarMarca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

        DB::table('tb_marcas')->insert([
            "nombre"=>$req->input('txtnombre'),
            "fechaRegistro"=>$req->input('txtfecha'),
            "fecha"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('agenda/marca/agregar')
        ->with('confirmacion','Guardado')
        ->with('txtnombre',$req->txtnombre);
    }

    public function show()
    {

        $consulMarcas=DB::table('tb_marcas')->get();
        return view('parciales.agenda.marca.consultar',compact('consulMarcas'));
    }


    public function showNombre(validadBuscar $req)
    {
        $nombre = $req->input('txtnombre');
        $consulMarcas=DB::select('select * from tb_marcas where nombre like ?', ['%'.$nombre.'%']);

        return view('parciales.agenda.marca.consultar',compact('consulMarcas'));
    }

    public function edit($id)
    {
        $consulMarca=DB::table('tb_marcas')->where('idMarca', $id)->first();
        return view('parciales.agenda.marca.editar',compact('consulMarca'));
    }

    public function update(validarMarca $req, $id)
    {
        DB::table('tb_marcas')->where('idMarca', $id)->update([
            "nombre"=>$req->input('txtnombre'),
            "fechaRegistro"=>$req->input('txtfecha'),
            "updated_at"=>Carbon::now()
        ]);
        return redirect('agenda/marca/consultar')
        ->with('confirmacion','Guardado')
        ->with('txtnombre',$req->txtnombre);
    }

    public function destroy($id)
    {
        //
    }
}
