<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenuser extends Model
{
    protected $fillable = [
        'user_id', 'imagen'
    ];
}
