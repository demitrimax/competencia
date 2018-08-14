<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\suscriptores;
use Intervention\Image\ImageManager;
use App\compvideos;
use App\tcompetencia;
use Auth;
use RicardoFiorani\Matcher\VideoServiceMatcher;


class CompetidoresController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:suscriptor');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = compvideos::where('competidor',Auth::user()->id)->get();
        $competencia = tcompetencia::where('nombreclave', Auth::user()->tcompetencia)->first();
        return view('competidor.dashboard')->with(compact('videos','competencia'));
    }
    public function avatarchange(Request $request)
    {
      //guardar la imagen en el sistema de archivos
      $manager = new ImageManager;
      $file = $request->file('avatarimg');
      $path = public_path() . '/suscriptor/avatars/';
      $filename = uniqid().$file->getClientOriginalName();
      //cambiar el tamaño de la imagen
      $image = $manager->make($file)->resize(400, 400)->save($path.$filename);
      //$file->move($path,$filename);
      //guardar el registro de la Imagen
      $avatar = suscriptores::find($request->idcompetidor);
      $avatar->avatar = 'suscriptor/avatars/'.$filename;
      $avatar->save(); //INSERT

      return back();
    }

    public function videoupload (Request $request)
    {
      $videos = new compvideos;
      $videos->competidor = $request->input('idcompetidor');
      $videos->videourl = $request->input('videourl');
      $videos->tcompetencia = $request->input('tcompetencia');
      $videos->comentario = $request->input('comentario');
      $videos->clasifica = $request->input('clasifica');
      $videos->save();

      return back();
    }
}
