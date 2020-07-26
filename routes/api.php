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

Route::group(['middleware' => ['apiJwt']], function () {
    Route::get('/pets', 'Api\PetController@index');
    Route::post('/pets', 'Api\PetController@store');

    Route::get('/users', 'Api\UserController@index');

    Route::post('logout', 'Api\AuthController@logout');
});

Route::post('login', 'Api\AuthController@login');
Route::post('/users', 'Api\UserController@store');


