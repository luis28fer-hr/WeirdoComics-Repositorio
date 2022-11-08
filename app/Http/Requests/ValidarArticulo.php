<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarArticulo extends FormRequest
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
            'txtnombre'=>'required',
            'txttipo'=>'required',
            'txtmarcas'=>'required',
            'txtdescripcion'=>'required',
            'txtcantidad'=>'required',
            'txtpreciocom'=>'required',
            'txtprecioven'=>'required',
            'txtfech'=>'required',
            'txtproveedor'=>'required'
        ];
    }
}
