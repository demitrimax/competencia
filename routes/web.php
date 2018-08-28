<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'inicioController@welcome');
Route::get('/entrada/{id}', 'inicioController@entrada');
Route::get('/pagina/{id}', 'inicioController@paginafija');
Route::fallback('inicioController@notFound');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registro', 'registroController@index');
Route::post('/registro', 'registroController@paypalpago');
Route::post('/verifregistro','registroController@validaform');
Route::get('/pagocorrecto/{id}', 'registroController@guardar'); //ya que se aprobó el pago ahora registrar el usuario
Route::get('/suscriptcorrecto/{id}','registroController@UsuarioRegistrado');
Route::get('/pagocancelado/{id}', 'registroController@cancelado');


Route::prefix('competidor')->group(function() {
  Route::get('/login', 'Auth\CompetidoresLoginController@showLoginForm')->name('competidor.login');
  Route::post('/login', 'Auth\CompetidoresLoginController@login')->name('competidor.login.submit');
  Route::get('/logout', 'Auth\CompetidoresLoginController@logout')->name('competidor.logout');
  Route::get('/','Auth\CompetidoresController@index')->name('competidor.dashboard');
  Route::post('/avatarimg','Auth\CompetidoresController@avatarchange');
  Route::post('/videoupload','Auth\CompetidoresController@videoupload');
});


//vista previa email

Route::get('email', function() {
    Mail::to('armandoaguilar1@hotmail.com')
          ->send(new App\Mail\WelcomeUser());
});
//Admin
Route::prefix('admin')->group(function() {
  Route::get('/','AdministradorController@index');
  Route::get('/competidores','AdministradorController@competidores');
  Route::get('/competidor/{id}/perfil','AdministradorController@compperfil');
  Route::get('/competidor/{id}/videos','AdministradorController@compvideos');
  Route::get('/videos','AdministradorController@videos');
  Route::get('/videos/{id}/califica','AdministradorController@calificavideo');
  Route::post('/video/califica','AdministradorController@guardacalif');
  Route::get('/competidores/calificaciones','AdministradorController@calificaciones');
  Route::get('/calif/cross','AdministradorController@califCrossfit');
});
