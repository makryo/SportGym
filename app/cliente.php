<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
        'id',
        'nombres',
        'apellidos', 
        'fech_nac', 
        'genero', 
        'direccion', 
        'dpi',
        'telefono'
    ];
}
