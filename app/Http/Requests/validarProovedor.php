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
            'txtproovedor' => 'required|min:3|max:30',
            'txtmunicipio' => 'required|numeric',
            'txtcontacto' => 'required|numeric|digits_between:8,9',
            'txtnumero' => 'required|numeric|digits_between:8,9',
            'txtcelular' => 'required|numeric|digits_between:8,9',
            'txtcorreo' => 'required|email'
        ];
    }
}
