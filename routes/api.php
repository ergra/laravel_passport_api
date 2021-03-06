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

Route::post('login', 'AuthController@login');
Route::post('signup', 'AuthController@signup');
Route::get('logout', 'AuthController@logout');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('logs', 'LogController@index');
    Route::get('logs/{id}', 'LogController@show');
    Route::post('logs', 'LogController@store');
    Route::put('logs/{id}', 'LogController@update');
    Route::delete('logs/{id}', 'LogController@destroy');
    Route::get('user', 'AuthController@user');
});

