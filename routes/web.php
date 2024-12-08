<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\RegisterController;
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

    Route::get('/register',[RegisterController::class,'index'])->name('register');
    Route::post('/register-post',[RegisterController::class,'save'])->name('auth.register');

    Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::post('/login-post',[LoginController::class,'save'])->name('auth.login');
});
Route::get('/home',[HomeController::class,'home'])->name('website.home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/job-detail',[HomeController::class,'job_detail'])->name('job_detail');
Route::get('/job-list',[HomeController::class,'job_list'])->name('job_list');
Route::get('/job_category',[HomeController::class,'job_category'])->name('job_category');
Route::get('/testimonial',[HomeController::class,'testimonial'])->name('testimonial');
Route::get('/error_page',[HomeController::class,'error_page'])->name('error_page');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
