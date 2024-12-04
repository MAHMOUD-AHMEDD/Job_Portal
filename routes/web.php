<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LogoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'/auth'],function (){

    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login-post',[LoginController::class,'save'])->name('auth.login');
});
Route::get('/logout',[LogoutController::class,'logout_system'])->middleware('auth');





