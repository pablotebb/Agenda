<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProyectoRequest extends Request
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
            'titulo' => 'max:60|required',
            'idea' => 'max:150|required',
            'github' => 'max:90|required',
            'estado' => 'max:20|required',
            'ambito' => 'max:20|required',
            'programadores' => 'boolean',
            'disenadores' => 'boolean',
            'marketing' => 'boolean'
        ];
    }
}
