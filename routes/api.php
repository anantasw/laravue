<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Api', 'prefix' => 'v1'], function() {
    Route::post('login', 'AuthController@login');
    Route::post('check_token', 'AuthController@checkToken');
    Route::post('logout', 'AuthController@logout');

    Route::get('quote', 'QuoteController@index');
});
