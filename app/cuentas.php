<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuentas extends Model
{
    protected $fillable=[ 
        'cue_numero',
        'cli_cedula',
        'cue_saldo',
        'cue_activa',
        'cue_clave'
    ];
    protected $primaryKey= 'cue_numero';
}
