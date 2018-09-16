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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();


Route::get("/lectures", "LecturesController@index")->name('lecture.index'); 

// Route::get("/lectures/{id}", "LecturesController@show")->name('lectures.show');


// Sukuriame nauja route'a lectures
Route::group(['middleware' => "auth"], function() {
    
Route::get("/lectures/create", "LecturesController@create")->name('lecture.create');

Route::get("/lectures/{id}/edit", "LecturesController@edit")->name('lecture.edit');

Route::post("/lectures/store", "LecturesController@store")->name('lecture.store');

Route::post("/lectures/{id}/update", "LecturesController@update")->name('lecture.update');

Route::post('/lectures/{id}/delete', 'LecturesController@destroy')->name('lecture.delete');
});

//students routas

Route::get("/students", "StudentsController@index")->name('students.index'); 

// Route::get("/students/{id}", "StudentsController@show")->name('student.show');



// Sukuriame nauja route'a
Route::group(['middleware' => "auth"], function() {

Route::get("/students/create", "StudentsController@create")->name('students.create');

Route::get("/students/{id}/edit", "StudentsController@edit")->name('students.edit');

Route::post("/students/store", "StudentsController@store")->name('students.store');

Route::post("/students/{id}/update", "StudentsController@update")->name('students.update');

Route::post('/students/{id}/delete', 'StudentsController@destroy')->name('students.delete');
});

Route::get("/grades", "GradesController@index")->name('grades.index');
// Route::get("/grades/{id}", "GradesController@show")->name('grades.show');

Route::group(['middleware' => "auth"], function() {
    
Route::get("/grades/create", "GradesController@create")->name('grades.create');

Route::get("/grades/edit/{id}", "GradesController@edit")->name('grades.edit');

Route::post("/grades/store", "GradesController@store")->name("grades.store");

Route::post("/grades/update/{id}", "GradesController@update")->name("grades.update");

Route::post("/grades/destroy/{id}", "GradesController@destroy")->name("grades.destroy");

});
