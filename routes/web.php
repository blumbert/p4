<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// shoe resource
# Index page to show all the shoes
Route::get('/shoes', 'ShoeController@index')->name('shoes.index');
# Show a form to create a new shoe
Route::get('/shoes/create', 'ShoeController@create')->name('shoes.create');
# Process the form to create a new shoe
Route::post('/shoes', 'ShoeController@store')->name('shoes.store');
# Show an individual shoe
Route::get('/shoes/{id}', 'ShoeController@show')->name('shoes.show');
# Show form to edit a shoe
Route::get('/shoes/{id}/edit', 'ShoeController@edit')->name('shoes.edit');
# Process form to edit a shoe
Route::put('/shoes/{id}', 'ShoeController@update')->name('shoes.update');
# Delete a shoe
Route::delete('/shoes/{id}', 'ShoeController@destroy')->name('shoes.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
