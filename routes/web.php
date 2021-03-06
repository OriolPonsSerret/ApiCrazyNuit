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


//Veure totes les Rutas Mitjanas
Route::get('/rutasmitjanas', function (){
	$rutesmitjanas = App\RuteM::all();
	return view('rutas.indexRutasMitjanas')->with ('RuteM', $rutesmitjanas);
});


//Veure totes les Rutas Llargas
Route::get('/rutasllargas', function (){
	$rutesllargas = App\RuteLL::all();
	return view('rutas.indexRutasLlargas')->with ('RuteLL', $rutesllargas);
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


//Crear Rutas

Route::get('rutas/crearruta', function (){
	$bars = App\Pub::all()-> pluck('Nom', 'Nom');
	$barrestaurant = App\BarRestaurant::all()-> pluck('Nom', 'Nom');
	$discotecas = App\Disco::all()-> pluck('Nom', 'Nom');
	$usuari = App\Usuari::all()->pluck('name', 'name');
	return view('rutas.addRutas')->with ('bars', $bars)->with ('barrestaurant', $barrestaurant)->with ('discotecas', $discotecas)->with ('usuari', $usuari);
});

Route::post('rutas/ruta', function (){
	$rutes = App\Rute::create(Request::all());
	return redirect('Rutes/'.$rutes->idrutes);
});


//Crear Rutas Mitjanas

Route::get('rutas/crearrutamitjana', function (){
	$bars = App\Pub::all()-> pluck('Nom', 'Nom');
	$barrestaurant = App\BarRestaurant::all()-> pluck('Nom', 'Nom');
	$discotecas = App\Disco::all()-> pluck('Nom', 'Nom');
	$usuari = App\Usuari::all()->pluck('name', 'name');
	return view('rutas.addRutasMitjanas')->with ('bars', $bars)->with ('barrestaurant', $barrestaurant)->with ('discotecas', $discotecas)->with ('usuari', $usuari);
});

Route::post('rutas/rutamitjana', function (){
	$rutesmitjanas = App\RuteM::create(Request::all());
	return redirect('rutesmitjanas/'.$rutesmitjanas->idrutesm);
});


//Crear Rutas Llargas

Route::get('rutas/crearrutallarga', function (){
	$bars = App\Pub::all()-> pluck('Nom', 'Nom');
	$barrestaurant = App\BarRestaurant::all()-> pluck('Nom', 'Nom');
	$discotecas = App\Disco::all()-> pluck('Nom', 'Nom');
	$usuari = App\Usuari::all()->pluck('name', 'name');
	return view('rutas.addRutasLlargas')->with ('bars', $bars)->with ('barrestaurant', $barrestaurant)->with ('discotecas', $discotecas)->with ('usuari', $usuari);
});

Route::post('rutas/rutallarga', function (){
	$rutesllargas = App\RuteLL::create(Request::all());
	return redirect('rutasllargas/'.$rutesllargas->idrutesl);
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
	$rutes = App\Rute::find($id);
	return view('rutas.showRutas')->with ('rutes', $rutes);
});


//Mostrar informacio de les Rutes Mitjanas
Route::get('rutesmitjanas/{id}', function ($id){
	$rutesmitjanas = App\RuteM::find($id);
	return view('rutas.showRutasMitjanas')->with ('rutesmitjanas', $rutesmitjanas);
});


//Mostrar informacio de les Rutes Largas
Route::get('rutasllargas/{id}', function ($id){
	$rutesllargas = App\RuteLL::find($id);
	return view('rutas.showRutasLargas')->with ('rutesllargas', $rutesllargas);
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


//Eliminar Rutas
Route::get('Ruta/{id}/delete', function ($id) {
	$rutes = App\Rute::find($id);
    return view('rutas.deleteRutas')->with('rutes', $rutes);
});

Route::delete('Ruta/{id}', function($id) {
	$rutes = App\Rute::find($id);
	$rutes->delete();
	$rutes = App\Rute::all();
    return view('rutas.indexRutas')->with ('Rute', $rutes);
});


//Eliminar Rutas Mitjanas
Route::get('RutaMitjana/{id}/delete', function ($id) {
	$rutesmitjanas = App\RuteM::find($id);
    return view('rutas.deleteRutasMitjanas')->with('rutesmitjanas', $rutesmitjanas);
});

Route::delete('RutaMitjana/{id}', function($id) {
	$rutesmitjanas = App\RuteM::find($id);
	$rutesmitjanas->delete();
	$rutesmitjanas = App\RuteM::all();
    return view('rutas.indexRutasMitjanas')->with ('RuteM', $rutesmitjanas);
});


//Eliminar Rutas Llargas
Route::get('RutaLlarga/{id}/delete', function ($id) {
	$rutesllargas = App\RuteLL::find($id);
    return view('rutas.deleteRutasLlargas')->with('rutesllargas', $rutesllargas);
});

Route::delete('RutaLlarga/{id}', function($id) {
	$rutesllargas = App\RuteLL::find($id);
	$rutesllargas->delete();
	$rutesllargas = App\RuteLL::all();
    return view('rutas.indexRutasLlargas')->with ('RuteLL', $rutesllargas);
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

//Editar Ruta
Route::get('Ruta/{id}/edit', function ($id){
	$rutes = App\Rute::find($id);
	$bars = App\Pub::all()-> pluck('Nom', 'Nom');
	$barrestaurant = App\BarRestaurant::all()-> pluck('Nom', 'Nom');
	$discotecas = App\Disco::all()-> pluck('Nom', 'Nom');
	$usuari = App\Usuari::all()->pluck('name', 'name');
	return view('rutas.editRutas')->with ('bars', $bars)->with ('barrestaurant', $barrestaurant)->with ('discotecas', $discotecas)->with ('usuari', $usuari);
});

Route::put('Ruta/{id}', function ($id){
	$rutes = App\Rute::find($id);
	$rutes->update(Request::all());
	return redirect('Rutes/'.$rutes->idrutes);
});


//Editar Ruta Mitjanas
Route::get('RutaMitjana/{id}/edit', function ($id){
	$rutesmitjanas = App\RuteM::find($id);
	$bars = App\Pub::all()-> pluck('Nom', 'Nom');
	$barrestaurant = App\BarRestaurant::all()-> pluck('Nom', 'Nom');
	$discotecas = App\Disco::all()-> pluck('Nom', 'Nom');
	$usuari = App\Usuari::all()->pluck('name', 'name');
	return view('rutas.editRutasMitjanas')->with ('bars', $bars)->with ('barrestaurant', $barrestaurant)->with ('discotecas', $discotecas)->with ('usuari', $usuari);
});

Route::put('RutesMitjanas/{id}', function ($id){
	$rutesmitjanas = App\RuteM::find($id);
	$rutesmitjanas->update(Request::all());
	return redirect('RutesMitjanas/'.$rutesmitjanas->idrutesm);
});