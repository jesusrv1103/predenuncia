<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class PredenunciaEvidencia extends Model
{
    protected $guarded = [];
    protected $table ="predenuncia_evidencias";

    public function predenuncia()
    {
        return $this->hasOne(Predenuncia::class,'predenuncia_id');
    }
}
