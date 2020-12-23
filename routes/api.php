<?php

use App\Exceptions\RecordNotFound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\ArticleController;

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
    try {
        return $request->user();
    } catch (RecordNotFound $exception) {
       throw new RecordNotFound();

    }

});
Route::get('/articles', 'App\Http\Controllers\ArticleController@index');
Route::get('/articles/{article}', 'App\Http\Controllers\ArticleController@show');
Route::post('/articles', 'App\Http\Controllers\ArticleController@store');
Route::put('/articles/{article}', 'App\Http\Controllers\ArticleController@update');
Route::delete('/articles/{article}', 'App\Http\Controllers\ArticleController@delete');
