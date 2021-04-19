<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asistencia extends Model
{
    protected $fillable = [
        'id',
        'token',
        'nom_cliente', 
        'created_at'
    ];
}
