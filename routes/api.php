<?php

//
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

Route::middleware(['auth:sanctum', 'verified'])->get('/user', function (Request $request) {
    return $request->user()->currentAccessToken();

});
// Route::get('/articles', 'App\Http\Controllers\ArticleController@index');
// Route::get('/articles/{article}', 'App\Http\Controllers\ArticleController@show');
// Route::post('/articles', 'App\Http\Controllers\ArticleController@store');
// Route::put('/articles/{article}', 'App\Http\Controllers\ArticleController@update');
// Route::delete('/articles/{article}', 'App\Http\Controllers\ArticleController@delete');
//better
Route::resource('/articles', 'App\Http\Controllers\ArticleController')->except([
    'create', 'edit',
])->middleware('auth:sanctum');

Route::get('/filter/{category}', 'App\Http\Controllers\FilterArticles@categories');
Route::get('/filter/trends/{num}', 'App\Http\Controllers\FilterArticles@trends');
Route::get('/filter/all', 'App\Http\Controllers\FilterArticles@all');
Route::get('/filter/hot-trends', 'App\Http\Controllers\FilterArticles@hotTrends');
//
// Route::apiResources([
//     'photos' => PhotoController::class,
//     'posts' => PostController::class,
// ]);
