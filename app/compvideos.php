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
        return $this->belongsTo(suscriptores::class,'suscriptor_id');
    }
    public function tcompetencia()
    {
        return $this->belongsTo(tcompetencia::class,'tcompetencia_id');
    }
}
