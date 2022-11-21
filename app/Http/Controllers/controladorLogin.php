<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarLogin;
use Illuminate\Http\Request;

class controladorLogin extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function signIn(validarLogin $req)
    {

        return redirect('inicio');
    }
}
