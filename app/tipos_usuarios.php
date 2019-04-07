<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos_usuarios extends Model
{
   
    protected $fillable=[
        'tusu_codigo',
        'tusu_nombre'
    ];
    protected $primaryKey= 'tusu_codigo';
}
