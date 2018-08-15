<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class compvideos extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function suscriptores()
    {
        return $this->belongsTo(suscriptores::class,'id_competidor');
    }
    public function tcompetencia()
    {
        return $this->belongsTo(tcompetencia::class,'id_tcompetencia');
    }
}
