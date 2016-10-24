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

Route::resource('home', 'VehicleController');
// Route::get('/bootstrap', function () {
//     return view('firstbootstrap');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index');
// Route::get('/index', 'VehicleController@index');

Route::get('/hello', function () {
    return 'hello';
});
Route::get('/hellojuga', function () {
    return 'hello juga mas nuli';
});