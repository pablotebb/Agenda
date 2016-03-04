<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Proyecto extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = [
            'build_from' => 'titulo', // de dónde va a sacar
                                     // el slug
            'save_to'    => 'slug', // será la columna de
                                    // la BBDD donde se
                                    // almacene. La cual
                                    // todavía no existe
    ];

    protected $table = "proyectos";

    protected $fillable = ['titulo', 'idea', 'github',
                           'estado', 'ambito', 'programadores',
                           'diseñadores', 'marketing', 'user_id'];

    public function user(){
    	return $this->belongsTo('App\User'); // 1 a muchos
    }

    public function scopeSearch($query, $titulo)
    {
    	return $query->where('titulo', 'LIKE', "%$titulo%");
    }
    public function scopeSearchProyecto($query, $titulo)
    {
        return $query->where('titulo', '=', $titulo);
    }
}
