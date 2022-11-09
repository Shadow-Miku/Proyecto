<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorComics extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre'=>'required',
            'edicion'=>'required',
            'compañia'=>'required',
            'cantidadComics'=>'numeric|required',
            'precioCompraCm'=>'numeric|required',
            'precioVentaCm'=>'numeric|required',
            'fechaIngresoCm'=>'required'
        ];
    }
}
