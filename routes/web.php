<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\userController;
use App\Http\Controllers\contactController;

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

Route::get('/Dashboard',function (){
    return view('adm.index');
});

Route::get('/Dashboard/user/{q?}',[userController::class,'index']);

Route::post('/Dashboard/user',[userController::class,'store']);

Route::get('/contact/{q?}',[contactController::class,'index']);

Route::post('/contact',[contactController::class,'store']);
Route::delete('/contact/delete/{id}',[contactController::class,'destroy']);



Route::get('/Dashboard/user/edit/{id}',[userController::class,'edit']);

Route::patch('/Dashboard/user/edit/{id}',[userController::class,'update']);

Route::delete('/Dashboard/user/delete/{id}',[userController::class,'destroy']);



