<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public $table = 'employees';
    protected $fillable = [
        'dni', 'nombre','direccion','movil','area','sueldo','estado',
    ];
}
