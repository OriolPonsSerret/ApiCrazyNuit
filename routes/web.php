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

Route::get('locals/crear', function (){
	$BarRestaurant = App\BarRestaurant::all();
	return view('locals.add')->with ('BarRestaurant', $BarRestaurant);
});

Route::get('locals/{id}', function ($id){
	$BarRestaurant = App\BarRestaurant::find($id);
	return view('locals.show')->with ('BarRestaurant', $BarRestaurant);
});



