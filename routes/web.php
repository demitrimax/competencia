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
Route::fallback('inicioController@notFound');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registro', 'registroController@index');
Route::post('/registro', 'registroController@paypalpago');
Route::post('/verifregistro','registroController@validaform');
Route::get('/pagocorrecto/{id}', 'registroController@guardar'); //ya que se aprobó el pago ahora registrar el usuario
Route::get('/suscriptcorrecto/{id}','registroController@UsuarioRegistrado');
Route::get('/pagocancelado/{id}', 'registroController@cancelado');

Route::get('/competidor/login','CompetidorController@iniciasesion');
Route::get('/iniciarsesion', function() {
  return redirect('/competidor/login');
});
Route::get('/suscriptor/login', function() {
  return redirect('/competidor/login');
});


Route::get('/plans','PlansController@index');
Route::get('/plan/{plan}', 'PlansController@show');


Route::get('/braintree/token', 'BraintreeTokenController@token');

Route::post('/subscribe', 'SubscriptionsController@store');
Route::post('/registrado', 'SubscriptionsController@registrado');


Route::get('/payment/process', 'PaymentsController@process')->name('payment.process');

//vista previa email

Route::get('email', function() {
    Mail::to('armandoaguilar1@hotmail.com')
          ->send(new App\Mail\WelcomeUser());
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
