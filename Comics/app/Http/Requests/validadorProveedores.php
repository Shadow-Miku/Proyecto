<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorProveedores extends FormRequest
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
            'empresa'=>'required',
            'direccion'=>'required',
            'pais'=>'required',
            'contacto'=>'required',
            'noFijo'=>'numeric|required|max:999999999999',
            'noCelular'=>'numeric|required|max:999999999999',
            'correo'=>'email|required'
        ];
    }
}
