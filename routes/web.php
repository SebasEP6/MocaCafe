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
    return view('home');
});

Route::get('/nosotros', function () {
	$title = "Nosotros";
	$page = "about";
    return view('about', compact('title', 'page'));
});

Route::get('/galeria', [
	'uses' => 'HomeController@gallery',
	'as'   => 'gallery'
]);

Route::get('/menu', [
	'uses' => 'HomeController@category',
	'as'   => 'menu'
]);

Route::get('/menu/{category}', [
	'uses' => 'HomeController@category',
	'as'   => 'category'
]);

Route::get('/contacto', function () {
	$title = "Contacto";
	$page = "contact";
    return view('contact', compact('title', 'page'));
});

Route::get('/nuevo', function () {
	$title = "Evento";
	$page = "event";
    return view('events', compact('title', 'page'));
});

Route::post('/contacto/correo', [
	'uses' => 'HomeController@mail',
	'as'   => 'mailer'
]);