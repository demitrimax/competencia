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
      $crossfit = suscriptores::where('premium','1')->wherein('tcompetencia_id',['1','2','3'])->count();
      $porcCross = round(($crossfit / $totalsuscriptores)*100);
      $gymnastic = suscriptores::where('premium','1')->wherein('tcompetencia_id',['4','5','6'])->count();
      $porcGym = round(($gymnastic / $totalsuscriptores)*100);
      $weight = suscriptores::where('premium','1')->wherein('tcompetencia_id',['7','8','9'])->count();
      $porcWeight= round(($weight / $totalsuscriptores)*100);
      $condition = suscriptores::where('premium','1')->wherein('tcompetencia_id',['10','11','12'])->count();
      $porcCondition= round(($condition / $totalsuscriptores)*100);
      $perderpeso = suscriptores::where('premium','1')->wherein('tcompetencia_id',['13'])->count();
      $porcPerderpeso= round(($perderpeso / $totalsuscriptores)*100);
      //dd($totalsuscriptores);
      return view('admin.dashboard')->with(compact('totalsuscriptores','premium','porcentajeaceptacion','crossfit','porcCross','gymnastic','porcGym','weight','porcWeight','condition','porcCondition','perderpeso','porcPerderpeso'));
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

    public function videos()
    {
      if (Auth::user()->avatar == "" )
      {
        Auth::user()->avatar = 'adminlte/dist/img/avatar5.png';
      }
      $videos = compvideos::where('tiempo',null)->orWhere('repeticiones',null)->orWhere('peso',null)->get();
      return view('admin.listvideos')->with(compact('videos'));
    }
    public function calificavideo()
    {
      if (Auth::user()->avatar == "" )
      {
        Auth::user()->avatar = 'adminlte/dist/img/avatar5.png';
      }
      return view('admin.califvideo');
    }
}
