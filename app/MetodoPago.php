<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    public $table = 'metodopago';
    protected $fillable = [
        'nombre','banco','cuenta','estado',
    ];
}
