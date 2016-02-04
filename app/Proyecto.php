<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = "proyectos";

    protected $fillable = ['titulo', 'idea', 'github',
                           'estado', 'ambito', 'programadores',
                           'diseñadores', 'marketing', 'user_id'];

    public function user(){
    	return $this->belongsTo('App\User'); // 1 a muchos
    }
}
