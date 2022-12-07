<?php

namespace App\Http\Controllers;

use App\Http\Requests\procesarUsuario;
use App\Http\Requests\validadBuscar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Barryvdh\DomPDF\Facade\Pdf;

class controladorUsuarios extends Controller
{
    public function index()
    {

        return view('usuarios');
    }

    public function create()
    {
        $consulUsuarios=DB::table('tb_usuarios')->get();
        return view('parciales.usuarios.agregar',compact('consulUsuarios'));
    }

    public function store(procesarUsuario $req)
    {
        DB::table('tb_usuarios')->insert([
            "nombre"=>$req->input('nombre'),
            "apellidoP"=>$req->input('apellidoPaterno'),
            "apellidoM"=>$req->input('apellidoMaterno'),
            "celular"=>$req->input('numeroCelular'),
            "fechaIngreso"=>$req->input('fechaIngreso'),
            "email"=>$req->input('correo'),
            "contraseña"=>$req->input('password'),
            "confirmcontraseña"=>$req->input('passwordConfirm'),
            "cargo"=>$req->input('cargo'),
            "fechaIngreso"=>Carbon::now(),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

        return redirect('usuarios/agregar')
        ->with('confirmacion','Guardado')
        ->with('nombre',$req->nombre);
    }

    public function show()
    {

        $consulUsuarios=DB::table('tb_usuarios')->get();
        return view('parciales.usuarios.consultar',compact('consulUsuarios'));
    }

    public function showNombre(validadBuscar $req)
    {
        $nombre = $req->input('txtnombre');
        $consulUsuarios=DB::select('select * from tb_usuarios where nombre like ? or apellidoP like ? or apellidoM like ?', ['%'.$nombre.'%', '%'.$nombre.'%', '%'.$nombre.'%']);
        return view('parciales.usuarios.consultar',compact('consulUsuarios'));
    }

    public function showPDF()
    {
        $consulUsuarios=DB::table('tb_usuarios')->get();

        $pdf = PDF::loadView('parciales.usuarios.pdf', compact('consulUsuarios'));

        return $pdf->stream();
    }



    public function edit($id)
    {

        $consulUsuarios=DB::table('tb_usuarios')->where('idUsuario', $id)->first();
        return view('parciales.usuarios.editar', compact('consulUsuarios'));
    }

    public function update(procesarUsuario $req, $id)
    {
        DB::table('tb_usuarios')->where('idUsuario', $id)->update([
            "nombre"=>$req->input('nombre'),
            "apellidoP"=>$req->input('apellidoPaterno'),
            "apellidoM"=>$req->input('apellidoMaterno'),
            "celular"=>$req->input('numeroCelular'),
            "fechaIngreso"=>$req->input('fechaIngreso'),
            "email"=>$req->input('correo'),
            "contraseña"=>$req->input('password'),
            "confirmcontraseña"=>$req->input('passwordConfirm'),
            "cargo"=>$req->input('cargo'),
            "fechaIngreso"=>Carbon::now(),
            "updated_at"=>Carbon::now()
        ]);

        return redirect('usuarios/consultar')
        ->with('actualizacion','Guardado')
        ->with('nombre',$req->nombre);
    }

    public function destroy()
    {
        


        return redirect('usuarios/consultar')
        ->with('eliminacion','mensaje');
    }
}
