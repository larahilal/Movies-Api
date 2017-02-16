<?php




Route::get('/', function () {
	return view('welcome');
});


// Movies related routes

Route::get('movies', 'MoviesController@index');

Route::post('/', 'MoviesController@find_movie');

Route::get('display_movies', 'MoviesController@display_movie_info');

Route::get('insert_movie_form', 'MoviesController@insert_movie_form');

Route::post('store_new_movie', 'MoviesController@store_new_movie');

// Actors related routes

Route::get('display_actors', 'ActorsController@display_actor_info');

// Directors related routes

Route::get('insert_movie_with_new_director_form', 'DirectorsController@insert_movie_with_director_form');

Route::post('store_new_movie_with_new_director', 'DirectorsController@insert_movie_with_new_director');

// User related routes

Route::get('register_user', 'UserController@register');

Route::post('user_registration', 'UserController@store_user');

// Login related routes

Route::get('login_form', 'UserController@login_form');

Route::post('handle_login', 'UserController@authenticate');

Route::get('my_account', 'AccountController@my_account');

// Edit movie route

Route::get('edit_form', 'EditController@edit_form');

Route::post('update', 'EditController@update');

// Delete movie

Route::get('delete', 'DeleteController@delete');
