<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CompetidorController extends Controller
{
    //
    public function iniciasesion()
    {
      return view('competidor.login');
    }
}
