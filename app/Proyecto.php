<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = "proyectos";

    protected $fillable = ['titulo', 'idea', 'github',
                           'estado', 'ambito', 'programadores',
                           'disenadores', 'marketing', 'user_id'];
}
