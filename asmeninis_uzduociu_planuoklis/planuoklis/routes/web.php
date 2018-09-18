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


Auth::routes();


Route::get("/statuses", "statusesController@index")->name('statuse.index'); 

// Route::get("/statuses/{id}", "statusesController@show")->name('statuses.show');


// Sukuriame nauja route'a statuses
Route::group(['middleware' => "auth"], function() {
    
Route::get("/statuses/create", "statusesController@create")->name('statuse.create');

Route::get("/statuses/{id}/edit", "statusesController@edit")->name('statuse.edit');

Route::post("/statuses/store", "statusesController@store")->name('statuse.store');

Route::post("/statuses/{id}/update", "statusesController@update")->name('statuse.update');

Route::post('/statuses/{id}/delete', 'statusesController@destroy')->name('statuse.delete');
});

//tasks routas

Route::get("/tasks", "tasksController@index")->name('tasks.index'); 

// Sukuriame nauja route'a
Route::group(['middleware' => "auth"], function() {

Route::get("/tasks/create", "tasksController@create")->name('tasks.create');

Route::get("/tasks/{id}", "tasksController@show")->name('tasks.show');

Route::get("/tasks/{id}/edit", "tasksController@edit")->name('tasks.edit');

Route::post("/tasks/store", "tasksController@store")->name('tasks.store');

Route::post("/tasks/{id}/update", "tasksController@update")->name('tasks.update');

Route::post('/tasks/{id}/delete', 'tasksController@destroy')->name('tasks.delete');
});

