<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consignaciones extends Model
{
    protected $fillable=[ 
        'con_codigo',
        'cue_numero',
        'usu_cedula',
        'con_valor',
        'con_fecha',
        'con_descripcion'
    ];
    protected $primaryKey= 'con_codigo';
}
