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

Route::post('login', 'UserController@login');
Route::get('/apt/login',[ 'as'=>'login', 'uses' => 'UserController@login']);
Route::post('register', 'API\RegisterController@register');
Route::middleware('auth:api')->post('details','UserController@details');
