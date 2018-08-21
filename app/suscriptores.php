<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class suscriptores extends Authenticatable
{
  protected $guard = 'suscriptores';

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'nombre', 'apellidos', 'fecnac', 'edad', 'genero', 'telefono', 'tcompetencia', 'email', 'password', 'premium',
   ];

   /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
   protected $hidden = [
       'password', 'remember_token',
   ];
   use SoftDeletes;
   protected $dates = ['deleted_at'];

   public function compvideos() {
     return $this->hasMany(compvideos::class,'suscriptor_id');
   }
   
}
