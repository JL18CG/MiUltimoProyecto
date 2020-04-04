<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'titulo', 'contenido','post_id','user_id','aprovado'
    ];
}
