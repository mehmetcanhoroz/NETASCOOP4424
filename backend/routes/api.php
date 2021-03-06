<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'movies', 'as'=> 'movies.'], function (){
    Route::get('/{id}', 'MovieController@show')->name('show');
    Route::post('/{movie_id}/like', 'LikeDislikeController@store')->name('like');
    Route::post('/{movie_id}/comment', 'CommentController@store')->name('comment');
    Route::get('/', 'MovieController@index')->name('index');
});
