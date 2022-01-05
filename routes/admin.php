<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\adminController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/admin-login', function () {
//     return view('admin.login');
// });

Route::get('admin-login',[adminController::class,'index'])->middleware('guest:admin')->name('login');
Route::post('admin-login',[adminController::class,'adminLogin']);
Route::get('admin-dashboard',[adminController::class,'adminDashboard'])->middleware('auth:admin')->name('admin.dashboard');
Route::post('logout',[adminController::class,'adminLogout'])->middleware('auth:admin');