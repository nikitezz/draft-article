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
Route::get('/register',[UserController::class, 'create'])->name('register.create');
Route::post('/register',[UserController::class, 'store'])->name('register.store');

Route::get('/home',[\App\Http\Controllers\UserController::class, 'indexHome'])->name('home');
Route::get('/login',[UserController::class, 'loginForm'])->name('login.create');
Route::post('/login',[UserController::class,'login'])->name('login');

