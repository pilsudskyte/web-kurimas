<?php

use Illuminate\Http\Request;

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

// Sukuriame nauja route'a
Route::get("/news", "NewsController@index")->name('news.index');

// Kelias konkrecios naujienos atvaidavimui
/* localhost/naujiena.php?id=5 */
Route::get("/news/{id}", "NewsController@show")->name('news.show');


Route::get("/naujienos/create", "NewsController@create");


Route::get('/skaiciuokle', 'HomeController@skaiciuokle');


// Route su pavadinimu
Route::post('/suma', 'HomeController@suma')->name('suma');


// Paprastas kelias
Route::get('/about-us', function() {
    return view('contacts');
});


// Ieskome controllerio failio /app/http/controllers folderyje
// @index nurodo kokia funkcija naudosime is controllerio
Route::get('/kontaktai', 'HomeController@index');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');