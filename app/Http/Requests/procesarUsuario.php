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
            'nombre' => 'required|min:2|max:30',
            'apellidoPaterno' => 'required|min:2|max:30',
            'apellidoMaterno' => 'required|min:2|max:30',
            'numeroCelular' => 'required|numeric|digits_between:9,10',
            'fechaIngreso' => 'required|date',
            'correo' => 'required|email',
            'password' => 'required|min:6|max:12',
            'passwordConfirm' => 'required|min:6|max:12',
            'cargo' => 'required'
        ];
    }
}
