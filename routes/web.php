<?php

use App\Exceptions\RecordNotFound;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/api/home', function () {
    return response()->json([
        "status_message"=>"Unauthorized action",
        "status_code" => 403
    ], 403);
});
