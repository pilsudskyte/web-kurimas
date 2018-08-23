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


// Paprastas kelias
Route::get('/about-us', function() {
    return view('contacts');
});

// Paprastas kelias

// Ieskome controllerio failio /app/http/controllers folderyje
// @index nurodo kokia funkcija naudosime is controllerio
Route::get('/kontaktai', 'HomeController@index');

// Kelias su parametrais
Route::get('/naujienos/{id}', function($id) {
    echo $id;
    return view('about');
});

