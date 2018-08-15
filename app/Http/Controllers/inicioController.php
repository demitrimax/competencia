<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\motivadora;
use App\carrusel;
use App\pages;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;

class inicioController extends Controller
{
    //
    public function welcome()
    {
      $entradas = post::orderBy('id','desc')->take(4)->get();
      $motivador = motivadora::all()->random(2);
      $carrusel = carrusel::all();
      $thumbs = new Collection;
      //crear las minuaturas de las imagenes
      foreach ($carrusel as $carruel) {
        $manager = new ImageManager;
        $path = 'storage/'.dirname($carruel->imagen).'/thumbs/';
        $path = str_replace('\\','/',$path);
        $nombre = basename($carruel->imagen);

        //$thumbs = 'muniatura'-> $path.$nombre;
        if (!file_exists($path.$nombre)) {
          if (!file_exists($path)){
            mkdir($path, 666, true);
          }
          $image = $manager->make('storage/'.$carruel->imagen)->resize(250,350)->save($path.$nombre);
        }

        //return $image->response('jpg');
      }
      //dd($motivador);
      //dd($entradas);
      return view('welcome')->with(compact('entradas','motivador','carrusel'));
    }

    public function entrada($id){
      $entradablog = post::findOrFail($id);
      //dd($entradablog);
      return view('blog')->with(compact('entradablog'));
    }

    public function notfound() {
      return view('notfound');
    }
    public function paginafija($id)
    {
      $lapagina = pages::findOrFail($id);
      return view('pagina')->with(compact('lapagina'));
    }
}
