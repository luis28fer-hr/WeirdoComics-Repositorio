<?php

namespace App\Http\Controllers;

use App\Http\Requests\procesarUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
