<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarProovedor extends FormRequest
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
            'txtproovedor' => 'required',
            'txtmunicipio' => 'required',
            'txtcontacto' => 'required',
            'txtnumero' => 'required',
            'txtcelular' => 'required',
            'txtcorreo' => 'required'
        ];
    }
}
