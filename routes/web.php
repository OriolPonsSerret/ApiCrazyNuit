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
    return view('index');
});


//Veure tots els Restaurants
Route::get('locals/restaurantes', function (){
	$barrestaurant = App\BarRestaurant::all();
	return view('locals.indexRestaurantes')->with ('BarRestaurant', $barrestaurant);
});


//Veure tots els Bars
Route::get('locals/bares', function (){
	$bars = App\Pub::all();
	return view('locals.indexBars')->with ('Pub', $bars);
});


//Crear Restaurants
Route::get('locals/crear', function (){
	$barrestaurant = App\BarRestaurant::all();
	return view('locals.add')->with ('BarRestaurant', $barrestaurant);
});


//Mostrar informacio de Restaurants
Route::get('BarRestaurant/{id}', function ($id){
	$barrestaurant = App\BarRestaurant::find($id);
	return view('locals.showRestaurantes')->with ('barrestaurant', $barrestaurant);
});


//Mostrar informacio de Bars
Route::get('Pub/{id}', function ($id){
	$bars = App\Pub::find($id);
	return view('locals.showBars')->with ('bars', $bars);
});