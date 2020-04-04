<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postdetalle extends Model
{
    protected $fillable = [
        'comentario_id', 'vino_id'
    ];
}
