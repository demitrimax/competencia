<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

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
