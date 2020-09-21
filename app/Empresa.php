<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    public $table = 'business';
    protected $fillable = [
        'ruc', 'empresa','direccion','fono','logo','estado',
    ];
}
