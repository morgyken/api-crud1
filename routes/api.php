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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//get all

Route::get ( '/posts', 'PostController@index');

//post route

Route::post ( '/post', 'PostController@store');

//show all

Route::get ( '/posts/{id}', 'PostController@show');

//update requests

Route::put ( '/post/{id}', 'PostController@update');

//delete request

Route::delete ( '/posts/{id}', 'PostController@delete');