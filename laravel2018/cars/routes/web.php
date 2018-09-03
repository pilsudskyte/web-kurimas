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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get("/cars", "CarsController@index")->name('cars.index'); 

Route::get("/cars{id}", "CarsController@show")->name('cars.show');

// Sukuriame nauja route'a
Route::group(['middleware' => "auth"], function() {
Route::get("/cars/create", "CarsController@create")->name('car.create');

Route::get("/cars/{id}/edit", "CarsController@edit")->name('car.edit');

Route::post("/cars/store", "CarsController@store")->name('car.store');

Route::post("/cars/{id}/update", "CarsController@update")->name('car.update');

Route::post('/cars/{id}/delete', 'CarsController@destroy')->name('car.delete');
});

//owners routas

Route::get("/owners", "OwnersController@index")->name('owners.index'); 

Route::get("/owners{id}", "OwnersController@show")->name('owners.show');

// Sukuriame nauja route'a
Route::group(['middleware' => "auth"], function() {

Route::get("/owners/create", "OwnersController@create")->name('owners.create');

Route::get("/owners/{id}/edit", "OwnersController@edit")->name('owners.edit');

Route::post("/owners/store", "OwnersController@store")->name('owners.store');

Route::post("/owners/{id}/update", "OwnersController@update")->name('owners.update');

Route::post('/owners/{id}/delete', 'OwnersController@destroy')->name('owners.delete');
});

