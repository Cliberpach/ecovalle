<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presentacion extends Model
{
    public $table = 'presentacion';
    protected $fillable = [
        'presentacion','estado',
    ];
}
