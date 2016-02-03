<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona_estudio_free extends Model
{
    protected $table = "zona_estudio_free";

    protected $fillable = ['titulo', 'descripcion', 'github',
                           'videos', 'visto', 'repaso', 'user_id'];

    public function user(){
    	return $this->belongsTo('App\User'); // 1 a muchos
    }

    public function category(){
    	return $this->belongsTo('App\Category'); // 1 a muchos
    }
}
