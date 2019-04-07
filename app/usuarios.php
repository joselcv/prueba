<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $fillable=[
        'usu_cedula',
        'tusu_codigo',
        'usu_nombre',
        'usu_login',
        'usu_clave',
    ];
    protected $primaryKey= 'usu_cedula';
}
