<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tcompetencia extends Model
{
    //
    public function compvideos() {
      return $this->hasMany(compvideos::class,'tcompetencia_id');
    }
    public function suscriptores() {
      return $this->hasMany(suscriptores::class,'tcompetencia_id');
    }
}
