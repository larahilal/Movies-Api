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

Route::get('movies', 'MoviesController@index');

Route::post('/', 'MoviesController@find_movie');

Route::get('display_movies', 'MoviesController@display_movie_info');

Route::get('display_actors', 'ActorsController@display_actor_info');