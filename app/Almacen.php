<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacen extends Model
{
    public $table = 'almacenes';
    protected $fillable = [
        'Almacen','Ubicacion','Estado',
    ];
}
