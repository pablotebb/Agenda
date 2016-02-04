<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['categorianombre', 'imagen'];


    public function Zona_estudio_frees(){
    	return $this->hasMany('App\Zona_estudio_free'); // 1 a muchos
    }

    public function Zona_estudio_privates(){
    	return $this->hasMany('App\Zona_estudio_private'); // 1 a muchos
    }

}
