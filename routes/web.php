<?php

use Illuminate\Support\Facades\Route;
use App\Pastel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('saludo', function () {
	$pastel = Pastel::sabor('chocolate')->first();
    return view('saludo')->with('pastel', $pastel->nombre);
});


Route::get('pruebaPastel', function(){
	$pasteles = Pastel::sabor('chocolate')->first();
	//$pasteles = Pastel::where('sabor','vainilla')->first();
	return view('pruebaPastel')->with('pasteles', $pasteles->nombre);
	//dd($pasteles);
});
*/
Route::get('/', function () {
    return view('welcome');
});



Route::resource('pasteles','PastelesController');
