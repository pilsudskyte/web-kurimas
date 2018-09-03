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


/*// Sukuriame nauja route'a
// Kelias konkrecios naujienos atvaidavimui
/* localhost/naujiena.php?id=5 */

Route::get("/news", "NewsController@index")->name('news.index');

Route::get("/news/{id}", "NewsController@show")->name('news.show');


Route::group(['middleware' => "auth"], function() {
	// Istrynimo route'as
	Route::post("/naujienos/destroy/{id}", "NewsController@destroy")->name('news.destroy');

	// Post route'as atsakingas uz formos duomenu idejima i duombaze
	Route::post("/naujienos/update/{id}", "NewsController@update")->name('news.update');

	// Post route'as atsakingas uz formos duomenu idejima i duombaze
	Route::post("/naujienos/store", "NewsController@store")->name('news.store');

	Route::get("/naujienos/edit/{id}", "NewsController@edit")->name('news.edit');

	Route::get("/naujienos/create", "NewsController@create")->name('news.create');
});




// Sukuriame nauja route'a
Route::get("/comments", "CommentsController@index")->name('comments.index');

Route::get("/comments/create", "CommentsController@create")->name('comments.create')->middleware('auth');

Route::get("/comments/{id}/edit", "CommentsController@edit")->name('comments.edit');

Route::post("/comments/store", "CommentsController@store")->name('comments.store');

Route::post("/comments/{id}/update", "CommentsController@update")->name('comments.update');

Route::post('/comments/{id}/delete', 'CommentsController@destroy')->name('comments.delete');




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