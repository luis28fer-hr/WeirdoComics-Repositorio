<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class procesarComic extends FormRequest
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
            'nombre' => 'required|min:3|max:30',
            'edicion' => 'required|integer|digits_between:1,4',
            'compañia' => 'required',
            'cantidad' => 'required|integer',
            'compra' => 'required|numeric|between:0.99,9999.99',
   /*          'venta' => 'required|numeric|between:0.99,9999.99', */
            'fecha' => 'required|date',
            'proveedor' => 'required'
        ];
    }
}
