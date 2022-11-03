<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class procesarUsuario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'required',
            'apellidoPaterno' => 'required',
            'apellidoMaterno' => 'required',
            'numeroCelular' => 'required',
            'fechaIngreso' => 'required',
            'correo' => 'required',
            'password' => 'required',
            'passwordConfirm' => 'required',
            'cargo' => 'required'
        ];
    }
}
