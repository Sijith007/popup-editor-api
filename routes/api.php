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

Route::get('popup', 'App\Http\Controllers\ApiController@getAllPopups');
Route::get('popups/{id}', 'App\Http\Controllers\ApiController@getPopup');
Route::post('popups', 'App\Http\Controllers\ApiController@createPopup');
Route::put('popups/{id}', 'App\Http\Controllers\ApiController@updatePopup');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
