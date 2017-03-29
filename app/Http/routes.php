<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'PostController@index');
//Route::get('/city-airport', 'UserController@index');
//Route::post('/add', 'HomeController@add');
Route::post('/add', 'PostController@store');
//Route::post('/delete', 'PostController@destroy');

Route::get('/delete','PostController@destroy');
