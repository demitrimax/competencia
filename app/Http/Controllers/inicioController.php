<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\motivadora;

class inicioController extends Controller
{
    //
    public function welcome()
    {
      $entradas = post::orderBy('id','desc')->take(4)->get();
      $motivador = motivadora::all()->random(2);
      //dd($motivador);
      //dd($entradas);
      return view('welcome')->with(compact('entradas','motivador'));
    }

    public function entrada($id){
      $entradablog = post::findOrFail($id);
      //dd($entradablog);
      return view('blog')->with(compact('entradablog'));
    }
}
