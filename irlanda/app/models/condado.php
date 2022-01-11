<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class condado extends Model
{
    protected $table = "condado";
    //
    protected $fillable = [
        'nombre','descripcion','imagen'
    ];
}
