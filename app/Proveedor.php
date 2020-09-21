<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
   
    public $table = 'providers';
    protected $fillable = [
        'ruc', 'nombre','direccion','fonofijo','fonomovil','contacto','fonocontacto','emprtras','direccionemptranps','estado',
    ];
}
