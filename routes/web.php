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

use Illuminate\Http\Request;

// Songs collection routes
Route::get('/songs', 'SongController@index');
Route::post('/songs', 'SongController@create');

// Songs singular routes
Route::get('/songs/{id}', 'SongController@show');
Route::put('/songs/{id}', 'SongController@update');
Route::delete('/songs/{id}', 'SongController@destroy');


// Videos collection routes
Route::get('/videos', 'VideoController@index');
Route::post('/videos', 'VideoController@create');

//Videos singular routes
Route::get('/videos/{id}', 'VideoController@show');
Route::put('/videos/{id}', 'VideoController@update');
Route::delete('/video/{id}', 'VideoController@destroy');


// Podcasts collection routes
Route::get('/podcasts', 'PodcastController@index');
Route::post('/podcasts', 'PodcastController@create');

//Podcasts singular routes
Route::get('/podcasts/{id}', 'PodcastController@show');
Route::put('/podcasts/{id}', 'PodcastController@update');
Route::delete('/podcasts/{id}', 'PodcastController@destroy');

//HTML/view responses
Route::get('/', function () {
  return view('home');
});
