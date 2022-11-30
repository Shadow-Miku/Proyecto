<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorPedidos extends FormRequest
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
            'txtproveedor'=>'required',
            'txtarticulo'=>'required',
            'txtCantidad'=>'numeric|required|max:50',
            'txtEmail'=>'required',
            'txtDireccion'=>'required'
        ];
    }
}
