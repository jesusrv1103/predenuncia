<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Predenuncia extends Model
{
    public function denunciante(){
        return $this->belongsTo(Denunciante::class,'denunciante_id');
    }

    public function lugarHechos(){
        return $this->belongsTo(LugarHecho::class,'lugar_hechos_id');
    }
}
