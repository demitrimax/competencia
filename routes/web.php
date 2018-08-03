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
Route::post('/registro', 'registroController@guardar');

Route::get('/prueba', function() {
  return view('payprueba');
});

Route::get('/plans','PlansController@index');
//Route::get('/plans/{plan}', 'PlansController@show');
Route::get('/plans/{plan}', function($planSel) {
    return view('plans.show')->with(['plan' => $planSel]);
    //return view('plans.show');
});
Route::get('/braintree/token', 'BraintreeTokenController@token');

/*Route::group(['middleware' => 'auth'], function () {
    Route::get('/plan/{plan}', 'PlansController@show');
  });
  */
