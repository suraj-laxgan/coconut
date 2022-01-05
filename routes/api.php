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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->admin();
});

Route::get('api-test', function (Request $request) {
    return 'hi';
});
Route::middleware('auth:api')->prefix('v1')->group( function () {
    Route::get('admin-log', function (Request $request){
        return $request->admin();
    });
});

