<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipos_documentos extends Model
{
    protected $fillable=[ 
        'tdoc_codigo',
        'tdoc_nombre'
    ];

    protected $primaryKey= 'tdoc_codigo';

}
