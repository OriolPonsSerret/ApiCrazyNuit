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


//Veure totes les Rutas
Route::get('/rutas', function (){
	$rutes = App\Rute::all();
	return view('rutas.indexRutas')->with ('Rute', $rutes);
});


//Crear Bars
Route::get('locals/crearbar', function (){
	$bars = App\Pub::all();
	return view('locals.addBar')->with ('Pub', $bars);
});

Route::post('locales/bares', function (){
	$bars = App\Pub::create(Request::all());
	return redirect('Pub/'.$bars->idPub);
});


//Crear Restaurants
Route::get('locals/crearrestaurant', function (){
	$barrestaurant = App\BarRestaurant::all();
	return view('locals.addRestaurantes')->with ('BarRestaurant', $barrestaurant);
});

Route::post('locales/restaurants', function (){
	$barrestaurant = App\BarRestaurant::create(Request::all());
	return redirect('BarRestaurant/'.$barrestaurant->idBarRestaurant);
});


//Crear Discotecas
Route::get('locals/creardiscoteca', function (){
	$discotecas = App\Disco::all();
	return view('locals.addDiscotecas')->with ('Disco', $discotecas);
});

Route::post('locales/discotecas', function (){
	$discotecas = App\Disco::create(Request::all());
	return redirect('Disco/'.$discotecas->idDiscoteca);
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

//Mostrar informacio de les Discoteques
Route::get('Disco/{id}', function ($id){
	$discotecas = App\Disco::find($id);
	return view('locals.showDiscotecas')->with ('discotecas', $discotecas);
});


//Mostrar informacio de les Rutes
Route::get('Rutes/{id}', function ($id){
	$rutes = App\Rutes::find($id);
	return view('rutas.showRutas')->with ('Rute', $rutes);
});

//Eliminar Bars
Route::get('Pub/{id}/delete', function ($id) {
	$bars = App\Pub::find($id);
    return view('locals.deleteBars')->with('bars', $bars);
});

Route::delete('Pub/{id}', function($id) {
	$bars = App\Pub::find($id);
	$bars->delete();
	$bars = App\Pub::all();
    return view('locals.indexBars')->with ('Pub', $bars);
});


//Eliminar Restaurants
Route::get('BarRestaurant/{id}/delete', function ($id) {
	$barrestaurant = App\BarRestaurant::find($id);
    return view('locals.deleteRestaurants')->with('barrestaurant', $barrestaurant);
});

Route::delete('BarRestaurant/{id}', function($id) {
	$barrestaurant = App\BarRestaurant::find($id);
	$barrestaurant->delete();
	$barrestaurant = App\BarRestaurant::all();
    return view('locals.indexRestaurantes')->with ('BarRestaurant', $barrestaurant);
});


//Eliminar Discotecas
Route::get('Disco/{id}/delete', function ($id) {
	$discotecas = App\Disco::find($id);
    return view('locals.deleteDiscotecas')->with('discotecas', $discotecas);
});

Route::delete('Disco/{id}', function($id) {
	$discotecas = App\Disco::find($id);
	$discotecas->delete();
	$discotecas = App\Disco::all();
    return view('locals.indexDiscotecas')->with ('Disco', $discotecas);
});


//Editar Bars
Route::get('Pub/{id}/edit', function ($id){
	$bars = App\Pub::find($id);
    return view('locals.editBars')->with('bars', $bars);
});

Route::put('Pub/{id}', function ($id){
	$bars = App\Pub::find($id);
	$bars->update(Request::all());
	return redirect('Pub/'.$bars->idPub);
});


//Editar Restaurants
Route::get('BarRestaurant/{id}/edit', function ($id){
	$barrestaurant = App\BarRestaurant::find($id);
    return view('locals.editRestaurantes')->with('barrestaurant', $barrestaurant);
});

Route::put('BarRestaurant/{id}', function ($id){
	$barrestaurant = App\BarRestaurant::find($id);
	$barrestaurant->update(Request::all());
	return redirect('BarRestaurant/'.$barrestaurant->idBarRestaurant);
});


//Editar Discotecas
Route::get('Discotecas/{id}/edit', function ($id){
	$discotecas = App\Disco::find($id);
    return view('locals.editDiscotecas')->with('discotecas', $discotecas);
});

Route::put('Discotecas/{id}', function ($id){
	$discotecas = App\Disco::find($id);
	$discotecas->update(Request::all());
	return redirect('Discotecas/'.$discotecas->idDiscoteca);
});

Route::resource('BarRestaurant', 'BarRestaurantController');

Route::resource('web/pub', 'web\pubController');