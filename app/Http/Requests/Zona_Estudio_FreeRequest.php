<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Zona_Estudio_FreeRequest extends Request
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
            'descripcion' => 'max:80',
            'github' => 'max:90|required',
            'videos' => 'max:100|required',
            'visto' => 'boolean',
            'repaso' => 'numeric'
        ];
    }
}
