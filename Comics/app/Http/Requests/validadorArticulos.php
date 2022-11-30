<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorArticulos extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'tipo'=>'required',
            'marca'=>'required',
            'descripcion'=>'required',
            'cantidadArticulos'=>'numeric|required',
            'precioCompraAr'=>'numeric|required',
            'precioVentaAr'=>'numeric|required',
            'txtProveedor'=>'required',
            'fechaIngresoAr'=>'required'
        ];
    }
}
