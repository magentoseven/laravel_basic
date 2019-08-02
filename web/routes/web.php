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

/*
Route::get('/', function () {
    return view('welcome'); // Return a view.
});

Route::get('/hello', function () {
    return 'Hello'; // Return a string.
});

Route::get('/about', function () {
    return view('pages.about'); // Return a view.
});

Route::get('/user/{id}/{name?}', function ($id, $name = 'John') { // Parameters id is required, and name is optional.
    return 'Users id:'.$id.', name:'.$name;
})->where('id', '[0-9]+'); // -> Regular expression constraints.
*/

Route::get('/', 'PagesController@index'); // Route to a controller and it method.
Route::get('/about', 'PagesController@about'); // Route to a controller and it method.
Route::get('/users', 'PagesController@users'); // Route to a controller and it method.


