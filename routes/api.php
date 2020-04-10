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

//! Initializing the api controllers.

Route::apiResource('/products','ProductController');

Route::group(['prefix' => 'products'], function () {
    Route::apiResource('/{product}/review','ReviewController');
});

// ! this apiRoute will be used to fetch the cart Items of the application.

Route::apiResource('/cart','CartController');


