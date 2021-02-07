<?php

use App\Exceptions\NotAllowed;
use App\Exceptions\RecordNotFound;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
//
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use App\Models\Article;
use App\Http\Resources\ArticleResource;

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
    'create', 'edit'
])->middleware('auth:sanctum');


//
// Route::apiResources([
//     'photos' => PhotoController::class,
//     'posts' => PostController::class,
// ]);
