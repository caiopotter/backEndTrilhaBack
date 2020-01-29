<?php

use Illuminate\Http\Request;
Use App\Movie;
Use App\User;

Route::get('movies', 'MovieController@index');
Route::get('movies/{movie}', 'MovieController@show');
Route::get('moviesSearchOverview', 'MovieController@searchByOverview');
Route::get('moviesSearchTitle', 'MovieController@searchByTitle');
Route::post('movies', 'MovieController@store');
Route::put('movies/{movie}', 'MovieController@update');
Route::delete('movies/{movie}', 'MovieController@delete');

Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::get('usersSearchByEmail', 'UserController@searchByEmail');
Route::post('users', 'UserController@store');