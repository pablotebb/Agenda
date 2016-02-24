<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactoRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
          'nombre' => 'max:30|required',
          'apellidos' => 'max:150|required',
          'profesion' => 'max:150|required',
          'telefono' => 'max:15|required',
          'direccion' => 'max:50|required',
          'email' => 'min:4|max:120|required|unique:contactos',
          'linkedin' => 'max:60|required',
          'twitter' => 'max:60|required',
          'facebook' => 'max:60|required',
          'web' => 'max:80|required',
          'github' => 'max:90|required',
        ];
    }
}
