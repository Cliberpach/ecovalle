<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea extends Model
{
    public $table = 'linea';
    protected $fillable = [
        'linea','estado',
    ];
}
