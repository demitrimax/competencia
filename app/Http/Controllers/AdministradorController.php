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
      $videos = compvideos::whereNull('tiempo')->whereNull('repeticiones')->whereNull('peso')->count();
      $totalsuscriptores = suscriptores::count();
      $premium = suscriptores::where('premium','1')->count();
      $porcentajeaceptacion = round(($premium / $totalsuscriptores)*100);
      $crossfit = suscriptores::where('premium','1')->wherein('tcompetencia_id',['1','2','3'])->count();
      $porcCross = round(($crossfit / $premium)*100);
      $gymnastic = suscriptores::where('premium','1')->wherein('tcompetencia_id',['4','5','6'])->count();
      $porcGym = round(($gymnastic / $premium)*100);
      $weight = suscriptores::where('premium','1')->wherein('tcompetencia_id',['7','8','9'])->count();
      $porcWeight= round(($weight / $premium)*100);
      $condition = suscriptores::where('premium','1')->wherein('tcompetencia_id',['10','11','12'])->count();
      $porcCondition= round(($condition / $premium)*100);
      $perderpeso = suscriptores::where('premium','1')->wherein('tcompetencia_id',['13'])->count();
      $porcPerderpeso= round(($perderpeso / $premium)*100);
      //dd($totalsuscriptores);
      return view('admin.dashboard')->with(compact('videos','totalsuscriptores','premium','porcentajeaceptacion','crossfit','porcCross','gymnastic','porcGym','weight','porcWeight','condition','porcCondition','perderpeso','porcPerderpeso'));
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

    public function compperfil($id)
    {
      if (Auth::user()->avatar == "" )
      {
        Auth::user()->avatar = 'adminlte/dist/img/avatar5.png';
      }
      $competidor = suscriptores::find($id);
      return view('admin.compprofile')->with(compact('competidor'));
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
      $videos = compvideos::whereNull('tiempo')
                ->whereNull('repeticiones')
                ->whereNull('peso')
                ->paginate(10);
      return view('admin.listvideos')->with(compact('videos'));
    }
    public function calificavideo($id)
    {
      if (Auth::user()->avatar == "" )
      {
        Auth::user()->avatar = 'adminlte/dist/img/avatar5.png';
      }
      $elvideo = compvideos::find($id);
      return view('admin.califvideo')->with(compact('elvideo'));
    }
    public function guardacalif(Request $request)
    {

      $id = $request->input('videoid');
      $vid = compvideos::findOrFail($id);
      if ($request->input('tiempo')) {
                $vid->tiempo = $request->input('tiempo');
      }
      if ($request->input('repeticiones')) {
            $vid->repeticiones = $request->input('repeticiones');
      }
      if ($request->input('peso')) {
            $vid->peso = $request->input('peso');
      }
      $vid->save();
      return redirect('admin/videos');
    }

    public function calificaciones()
    {
      if (Auth::user()->avatar == "" )
      {
        Auth::user()->avatar = 'adminlte/dist/img/avatar5.png';
      }
      //$crossfit = suscriptores::where('premium','1')->wherein('tcompetencia_id',['1','2','3'])->get();
      $crossfit = suscriptores::
                              join('compvideos','suscriptores.id','=','compvideos.suscriptor_id')
                              ->select('suscriptores.*','compvideos.*')
                              ->where('suscriptores.premium',1)
                              ->wherein('suscriptores.tcompetencia_id',['1','2','3'])
                              ->whereNotNull('compvideos.tiempo')
                              ->orwhereNotNull('compvideos.repeticiones')
                              ->orwhereNotNull('compvideos.peso')
                              ->get();
                              //->toSql();
      //dd($crossfit);
      return view('admin.calificaciones')->with(compact('crossfit'));
    }
    public function califCrossfit()
    {
      if (Auth::user()->avatar == "" )
      {
        Auth::user()->avatar = 'adminlte/dist/img/avatar5.png';
      }
      $crossBeginner = suscriptores ::
                        join('compvideos','suscriptores.id','=','compvideos.suscriptor_id')
                        ->select('suscriptores.*','compvideos.*')
                        ->where('suscriptores.premium',1)
                        ->where(function ($query) {
                          $query->orwhereNotNull('compvideos.tiempo')
                                ->orwhereNotNull('compvideos.repeticiones')
                                ->orwhereNotNull('compvideos.peso');
                        })
                        ->where('suscriptores.tcompetencia_id',1)
                        ->get();
                        //->toSql();
                        //dd($crossBeginner);
      $crossInter = suscriptores ::
                      join('compvideos','suscriptores.id','=','compvideos.suscriptor_id')
                      ->select('suscriptores.*','compvideos.*')
                      ->where('suscriptores.premium',1)
                      ->where(function ($query) {
                        $query->orwhereNotNull('compvideos.tiempo')
                              ->orwhereNotNull('compvideos.repeticiones')
                              ->orwhereNotNull('compvideos.peso');
                      })
                        ->where('suscriptores.tcompetencia_id',2)
                        ->get();
      $crossRX = suscriptores ::
                        join('compvideos','suscriptores.id','=','compvideos.suscriptor_id')
                        ->select('suscriptores.*','compvideos.*')
                        ->where('suscriptores.premium',1)
                        ->where(function ($query) {
                          $query->orwhereNotNull('compvideos.tiempo')
                                ->orwhereNotNull('compvideos.repeticiones')
                                ->orwhereNotNull('compvideos.peso');
                        })
                        ->where('suscriptores.tcompetencia_id',3)
                        ->get();
      return view('admin.califCross')->with(compact('crossBeginner','crossInter','crossRX'));
    }

}
