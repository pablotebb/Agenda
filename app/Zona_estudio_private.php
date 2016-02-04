<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona_estudio_private extends Model
{
    protected $table = "zona_estudio_private";

    protected $fillable = ['titulo', 'descripcion', 'github',
                           'videos', 'visto', 'web', 'repaso',
                           'user_id', 'category_id'];

    public function user(){
    	return $this->belongsTo('App\User'); // Uno a muchos
    }

    public function category(){
    	return $this->belongsTo('App\Category'); // Uno a muchos
    }
}
