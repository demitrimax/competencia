<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TCG\Voyager\Facades\Voyager;
use RicardoFiorani\Matcher\VideoServiceMatcher;
use Illuminate\Support\Facades\DB;
use App\compvideos;


class CalifvideosController extends Controller
{


    public function index(Request $request)
    {
        $allvideos = compvideos::all();
        return Voyager::view('voyager::compvideos.browse')->with(compact('allvideos'));
    }

    public function show(Request $request, $id)
    {
      $vid = compvideos::findOrFail($id);
      return Voyager::view('voyager::compvideos.califica')->with(compact('vid'));
    }

    public function update(Request $request, $id)
    {
      $vid = compvideos::findOrFail($id);

            $vid->tiempo = $request->input('tiempo');
      }

      $vid->repeticiones = $request->input('repeticiones');
      $vid->peso- = $request->input('peso');
      return Voyager::view('voyager::compvideos.califica')->with(compact('vid'));
    }


}
