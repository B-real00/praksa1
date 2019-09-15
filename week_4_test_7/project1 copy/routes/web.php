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

Route::get('/users', 'UsersController@index');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@store');

Route::get('/edit/{id}', 'RegisterController@edit');
Route::post('/update/{id}', 'RegisterController@update')->name('update.user');

Route::get('/destroy/{id}', 'RegisterController@destroy');
