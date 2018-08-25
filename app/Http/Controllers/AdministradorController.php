<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\suscriptores;
use App\compvideos;

class AdministradorController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      if (Auth::user()->avatar == "" )
      {
        Auth::user()->avatar = 'adminlte/dist/img/avatar5.png';
      }
      $totalsuscriptores = suscriptores::count();
      $premium = suscriptores::where('premium','1')->count();
      $porcentajeaceptacion = round(($premium / $totalsuscriptores)*100);
      //dd($totalsuscriptores);
      return view('admin.dashboard')->with(compact('totalsuscriptores','premium','porcentajeaceptacion'));
    }

    public function competidores()
    {
      if (Auth::user()->avatar == "" )
      {
        Auth::user()->avatar = 'adminlte/dist/img/avatar5.png';
      }
      $competidores = suscriptores::where('premium','1')->get();
      return view('admin.competidores')->with(compact('competidores'));
    }

    public function compvideos($id)
    {
      if (Auth::user()->avatar == "" )
      {
        Auth::user()->avatar = 'adminlte/dist/img/avatar5.png';
      }
      $videos = compvideos::where('suscriptor_id',$id)->get();
      return view('admin.compvideos')->with(compact('videos'));
    }
}
