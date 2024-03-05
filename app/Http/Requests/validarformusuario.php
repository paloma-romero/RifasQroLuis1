<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validarformusuario extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'txtNombre' => 'required|min:3',
            'txtEmail' => 'required|min:3',
            'txtUsuario' => 'required|min:3',
           
            
        ];
    }
}
