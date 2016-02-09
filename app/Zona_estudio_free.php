<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Zona_estudio_free extends Model implements SluggableInterface
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

    protected $table = "zona_estudio_free";

    protected $fillable = ['titulo', 'descripcion', 'github',
                           'videos', 'visto', 'repaso', 'user_id',
                           'category_id'];

    public function user(){
    	return $this->belongsTo('App\User'); // 1 a muchos
    }

    public function category(){
    	return $this->belongsTo('App\Category'); // 1 a muchos
    }
}
