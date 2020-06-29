<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class LugarHecho extends Model
{
    protected $dates = [
        'fecha'
    ];


    public function municipio(){
        return $this->belongsTo(Municipio::class,'municipio_id');
    }
}
