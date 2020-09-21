<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DSubLinea extends Model
{
    

    public function dLineas()
    {   
        return $this->belongsTo(DLinea::class);
    }
}



