<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class retiros extends Model
{
    protected $fillable=[ 
        'ret_codigo',
        'cue_numero',
        'usu_cedula',
        'ret_valor',
        'ret_fecha',
        'ret_descripcion'
    ];
    protected $primaryKey= 'ret_codigo';
}
