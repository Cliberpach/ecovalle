<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrigenDocumento extends Model
{
    public $table = 'origendocumento';
    protected $fillable = [
        'origen', 'estado',
    ];
}
