<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Route;

class CompetidoresLoginController extends Controller
{
    //

    public function __construct()
    {
      $this->middleware('guest:suscriptor', ['except' => ['logout']]);
    }
    public function showLoginForm()
   {
     return view('competidor.login');
   }
   public function login(Request $request)
   {
     // Validate the form data
     $this->validate($request, [
       'email'   => 'required|email|exists:suscriptores',
       'password' => 'required|min:6'
     ]);

     // Attempt to log the user in
     if (Auth::guard('suscriptor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
       // if successful, then redirect to their intended location
       return redirect()->intended(route('competidor.dashboard'));
     }
     // if unsuccessful, then redirect back to the login with the form data
     return redirect()->back()->withInput($request->only('email', 'remember'));
   }

   public function logout()
   {
       Auth::guard('suscriptor')->logout();
       return redirect('/competidor/login');
   }
   public function index()
   {
     return view('competidor/');
   }
}
