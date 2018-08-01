<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registroController extends Controller
{
    //

    public function index() {

      return view('register'); // formulario de registro
    }

    public function registrar()
    {
        return ('registrado');
    }
}
