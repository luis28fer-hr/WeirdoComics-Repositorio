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
            'txtnombre'=>'required|min:3|max:30',
            'txttipo'=>'required',
            'txtmarcas'=>'required',
            'txtdescripcion'=>'required|min:5|max:250',
            'txtcantidad'=>'required|integer',
            'txtpreciocom'=>'required|numeric|between:0.99,9999.99',
            /* 'txtprecioven'=>'required|numeric|between:0.99,9999.99', */
            'txtfech'=>'required|date',
            'txtproveedor'=>'required'
        ];
    }
}
