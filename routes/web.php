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


//Veure totes les Discoteques
Route::get('locals/discotecas', function (){
	$discotecas = App\Disco::all();
	return view('locals.indexDiscotecas')->with ('Disco', $discotecas);
});


//Index de Rutas
Route::get('rutas', function () {
    return view('rutas.index');
});


//Crear Bars
Route::get('locals/crearbar', function (){
	$bars = App\Pub::all();
	return view('locals.addBar')->with ('Pub', $bars);
});

Route::post('locals', function (){
	$bars = App\Pub::create(Request::all());
	return redirect('locals/'.$bars->id);
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

<<<<<<< HEAD

=======
>>>>>>> 122b93d5e4b8a76cfd5e18d1f94f67e6eee3b392
//Mostrar informacio de les Discoteques
Route::get('Disco/{id}', function ($id){
	$discotecas = App\Disco::find($id);
	return view('locals.showDiscotecas')->with ('discotecas', $discotecas);
});
<<<<<<< HEAD
=======

>>>>>>> 122b93d5e4b8a76cfd5e18d1f94f67e6eee3b392
