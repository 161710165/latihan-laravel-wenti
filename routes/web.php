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

Route::get('/about', function() {
	return '<h1>Halo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'Laravel, emang keren.';
});


Route::get('/kantin/{wenti}/{a}/{b}', function ($a,$b,$c) {
	return'<h1>Makan '.$a.'</h1>'
    .'<h1>Minum '.$b.'</h1>'
	.'<h1>Ngemil '.$c.'</h1>';
});

Route::get('user/{nama?}',function($a = "Gilang Putra Maulana") {
	return $a;
});