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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', 'HomeController@index');

Route::get('/movie', 'MovieController@index');

Route::get('/gallery', 'GalleryController@index');

Route::get('/gift', 'GiftController@index');

Route::get('/hobby', 'HobbyController@index');

Route::get('/travel', 'TravelController@index');

Route::get('/quiz', 'QuizController@index');
