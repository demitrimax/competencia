<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CompetidorController extends Controller
{
    //
    use AuthenticatesUsers;

    protected $redirectTo = '/competidor';

    public function iniciasesion()
    {
      return view('competidor.login');
    }
    //protected $guard = 'suscriptores';

    protected function guard() {
      return Auth::guard('suscriptores');
    }

}
