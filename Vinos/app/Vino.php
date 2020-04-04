<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    protected $fillable = [
        'nombre', 'marca', 'precio','descripcion','region','color','tipo','meses_tiempo','t_azucar'
    ];
}
