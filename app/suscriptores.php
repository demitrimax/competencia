<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

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
}
