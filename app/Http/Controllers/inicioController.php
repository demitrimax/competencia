<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class inicioController extends Controller
{
    //
    public function welcome()
    {
      $entradas = post::orderBy('id','desc')->take(4)->get();
      return view('welcome')->with(compact('entradas'));
    }

    public function entrada($id){
      $entradablog = post::findOrFail($id);
      return view('blog')->with(compact('entradablog'));
    }
}
