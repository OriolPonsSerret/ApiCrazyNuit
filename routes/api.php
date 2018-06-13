<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Rutes de l'usuari
Route::get('usuaris', 'UsuariController@index');
Route::get('usuaris/{usuari}', 'UsuariController@show');
Route::post('usuaris', 'UsuariController@store');
Route::put('usuaris/{usuari}', 'UsuariController@update');
Route::delete('usuaris/{usuari}', 'UsuariController@delete');

//rutes d'autenticacio
Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Route::middleware('auth:api')->get('/usuari', function (Request $request){return $request->usuari();});

//Route::group(['middleware' => 'auth:api'], function() {
	//Rutes de rutas
	Route::get('rutes', 'RutesController@index');
	Route::get('rutes/{rute}', 'RutesController@show');
	Route::post('rutes', 'RutesController@store');
	Route::put('rutes/{rute}', 'RutesController@update');
	Route::delete('rutes/{rute}', 'RutesController@delete');
	//Rutes de rutas curtes
	Route::get('rutesC', 'RutesCController@index');
	Route::get('rutesC/{ruteC}', 'RutesCController@show');
	Route::post('rutesC', 'RutesCController@store');
	Route::put('rutesC/{ruteC}', 'RutesCController@update');
	Route::delete('rutesC/{ruteC}', 'RutesCController@delete');
	//Rutes de rutas mitjanes
	Route::get('rutesM', 'RutesMController@index');
	Route::get('rutesM/{ruteM}', 'RutesMController@show');
	Route::post('rutesM', 'RutesMController@store');
	Route::put('rutesM/{ruteM}', 'RutesMController@update');
	Route::delete('rutesM/{ruteM}', 'RutesMController@delete');
	//Rutes de rutas llargues
	Route::get('rutesLL', 'RutesLLController@index');
	Route::get('rutesLL/{ruteLL}', 'RutesLLController@show');
	Route::post('rutesLL', 'RutesLLController@store');
	Route::put('rutesLL/{ruteLL}', 'RutesLLController@update');
	Route::delete('rutesLL/{ruteLL}', 'RutesLLController@delete');
	//Tipus de rutes
	//Route::get('rutestipus', 'RutesTipusController@index');
	//Rutes de pubs
	Route::get('pubs', 'PubController@index');
	Route::get('pubs/{pub}', 'PubController@show');
	Route::post('pubs', 'PubController@store');
	Route::put('pubs/{pub}', 'PubController@update');
	Route::delete('pubs/{pub}', 'PubController@delete');
	//Rutes de restaurants
	Route::get('restaurants', 'BarRestaurantController@index');
	Route::get('restaurants/{restaurant}', 'BarRestaurantController@show');
	Route::post('restaurants', 'BarRestaurantController@store');
	Route::put('restaurants/{restaurant}', 'BarRestaurantController@update');
	Route::delete('restaurants/{restaurant}', 'BarRestaurantController@delete');
	//Rutes de discoteques
	Route::get('discoteques', 'DiscotecaController@index');
	Route::get('discoteques/{discoteca}', 'DiscotecaController@show');
	Route::post('discoteques', 'DiscotecaController@store');
	Route::put('discoteques/{discoteca}', 'DiscotecaController@update');
	Route::delete('discoteques/{discoteca}', 'DiscotecaController@delete');
	//Rutes de zona
	Route::get('zones', 'ZonaController@index');
	Route::get('zones/{zona}', 'ZonaController@show');
	Route::post('zones', 'ZonaController@store');
	Route::put('zones/{zona}', 'ZonaController@update');
	Route::delete('zones/{zona}', 'ZonaController@delete');
	//Rutes de Assoliment
	Route::get('assoliments', 'AssolimentController@index');
	Route::get('assoliments/{assoliment}', 'AssolimentController@show');
	Route::post('assoliments', 'AssolimentController@store');
	Route::put('assoliments/{assoliment}', 'AssolimentController@update');
	Route::delete('assoliments/{assoliment}', 'AssolimentController@delete');
	//Rutes de Penalitzacio
	Route::get('penalitzacions', 'PenalitzacioController@index');
	Route::get('penalitzacions/{penalitzacio}', 'PenalitzacioController@show');
	Route::post('penalitzacions', 'PenalitzacioController@store');
	Route::put('penalitzacions/{penalitzacio}', 'PenalitzacioController@update');
	Route::delete('penalitzacions/{penalitzacio}', 'PenalitzacioController@delete');
	//Rutes de Comentaris
	Route::get('comentaris', 'ComentariController@index');
	Route::get('comentaris/{comentari}', 'ComentariController@show');
	Route::post('comentaris', 'ComentariController@store');
	Route::put('comentaris/{comentari}', 'ComentariController@update');
	Route::delete('comentaris/{comentari}', 'ComentariController@delete');
//});