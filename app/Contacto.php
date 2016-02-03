<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = "contactos";

    protected $fillable = ['nombre', 'apellidos', 'profesion',
                           'telefono', 'direccion', 'email',
                           'linkedin', 'twitter', 'facebook',
                           'web', 'github', 'id_user'];


    public function user(){
    	return $this->belongsTo('App\User'); // 1 a muchos
    }


}
