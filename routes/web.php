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
Route::get('/shoes', 'ShoeController@index')->name('shoes.index')->middleware('auth');
# Show a form to create a new shoe
Route::get('/shoes/create', 'ShoeController@create')->name('shoes.create')->middleware('auth');
# Process the form to create a new shoe
Route::post('/shoes', 'ShoeController@store')->name('shoes.store');
# Show an individual shoe
Route::get('/shoes/{id}', 'ShoeController@show')->name('shoes.show')->middleware('auth');
# Show form to edit a shoe
Route::get('/shoes/{id}/edit', 'ShoeController@edit')->name('shoes.edit')->middleware('auth');
# Process form to edit a shoe
Route::put('/shoes/{id}', 'ShoeController@update')->name('shoes.update');
# Delete a shoe
Route::delete('/shoes/{id}', 'ShoeController@destroy')->name('shoes.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');

// delete and recreate p4 db
if(App::environment('local')) {

    Route::get('/drop', function() {

        DB::statement('DROP database p4');
        DB::statement('CREATE database p4');

        return 'Dropped p4 db; created p4 db.';
    });

};

Route::get('/logout', 'Auth\LoginController@logout');
