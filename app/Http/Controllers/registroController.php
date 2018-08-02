<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suscriptores;

class registroController extends Controller
{
    //

    public function index() {

      return view('register'); // formulario de registro
    }

    public function guardar(Request $request)
    {
        //dd($request->all());
        //verificar que el google captcha
        //guardar el post

        $suscriptor = new suscriptores();
        $suscriptor->nombre = $request->input('nombre');
        $suscriptor->apellidos = $request->input('apellidos');
        $suscriptor->fecnac = $request->input('fecnac');
        $suscriptor->edad = $request->input('edad');
        $suscriptor->sexo = $request->input('gender');
        $suscriptor->telefono = $request->input('telefono');
        $suscriptor->clasificacion = $request->input('clasifica');
        $suscriptor->email = $request->input('email');
        $suscriptor->password = bcrypt($request->input('password'));
        $suscriptor->premium = 0;
        $suscriptor->save();

        //antes verificar el pago

        return redirect('registrado');
        //aqui debe llevar a la pagina del usuario en este caso utilizare el find

    }
}
