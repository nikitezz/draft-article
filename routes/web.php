<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
Route::post('/home',[\App\Http\Controllers\HomeController::class,'store'])->name('posts.store');

Route::group(['middleware'=>'guest'],function(){
    Route::get('/register',[UserController::class, 'create'])->name('register.create');
    Route::post('/register',[UserController::class, 'store'])->name('register.store');

    Route::get('/login',[UserController::class, 'loginForm'])->name('login.create');
    Route::post('/login',[UserController::class,'login'])->name('login');
});

Route::get('/logout',[UserController::class,'logout'])->name('logout')->middleware('auth');
Route::get('/admin',[\App\Http\Controllers\AdminController::class,'index'])->middleware('admin');

Route::get('/test',[\App\Http\Controllers\TestController::class,'index']);


Route::group(['middleware'=>'admin'],function(){
    Route::get('/admin',[\App\Http\Controllers\AdminController::class,'index']);
    Route::get('/create',[\App\Http\Controllers\HomeController::class,'create'])->name('posts.create');

    Route::get('/delete',[\App\Http\Controllers\AdminController::class,'indexDel']);
    Route::post('/delete',[\App\Http\Controllers\AdminController::class,'store'])->name('post.store');
});

Route::get('/profile',[\App\Http\Controllers\ProfileUserController::class,'index'])->name('profile');





