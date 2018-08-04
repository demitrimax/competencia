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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registro', 'registroController@index');
Route::post('/registro', 'registroController@paypalpago');
Route::get('/pagocorrecto', 'registroController@guardar'); //ya que se aprobó el pago ahora registrar el usuario

Route::get('/prueba', function() {
  return view('payprueba');
});

Route::get('/plans','PlansController@index');
Route::get('/plan/{plan}', 'PlansController@show');


Route::get('/braintree/token', 'BraintreeTokenController@token');

Route::post('/subscribe', 'SubscriptionsController@store');
Route::post('/registrado', 'SubscriptionsController@registrado');


Route::get('/payment/process', 'PaymentsController@process')->name('payment.process');
