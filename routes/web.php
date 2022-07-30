<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/index',[UserController::class,'index']);
Route::get('/user/create',[UserController::class,'create']);
Route::get('/user/update',[UserController::class,'update']);

Route::get('/book/index',[BookController::class,'index']);
Route::get('/book/create',[BookController::class,'create']);
Route::get('/book/update',[BookController::class,'update']);
