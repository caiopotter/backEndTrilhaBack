<?php

use Illuminate\Http\Request;
Use App\Movie;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('movies', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Movie::all();
});
 
Route::get('movies/{id}', function($id) {
    return Movie::find($id);
});

Route::get('movies/{id}', function($id) {
    return Movie::find($id);
});

Route::post('movies', function(Request $request) {
    return Movie::create($request->all);
});

Route::put('movies/{id}', function(Request $request, $id) {
    $movie = Movie::findOrFail($id);
    $movie->update($request->all());

    return $movie;
});

Route::delete('movies/{id}', function($id) {
    Movie::find($id)->delete();

    return 204;
});*/

/*Route::get('movies', 'MovieController@index');
Route::get('movies/{id}', 'MovieController@show');
Route::post('movies', 'MovieController@store');
Route::put('movies/{id}', 'MovieController@update');
Route::delete('movies/{id}', 'MovieController@delete');*/

Route::get('movies', 'MovieController@index');
Route::get('movies/{movie}', 'MovieController@show');
Route::get('moviesSearchOverview', 'MovieController@searchByOverview');
Route::get('moviesSearchTitle', 'MovieController@searchByTitle');
Route::post('movies', 'MovieController@store');
Route::put('movies/{movie}', 'MovieController@update');
Route::delete('movies/{movie}', 'MovieController@delete');