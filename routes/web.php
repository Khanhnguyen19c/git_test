<?php

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
})->name('home');

route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('logout');
Route::prefix('user')->group(function () {

    route::get('/login',[\App\Http\Controllers\UserController::class,'login'])->name('login');
    route::post('/login-action',[\App\Http\Controllers\UserController::class,'loginAction'])->name('user.login');
    route::post('/register-action',[\App\Http\Controllers\UserController::class,'register'])->name('user.register');
    route::get('/dashboard',[\App\Http\Controllers\UserController::class,'dashboard'])->name('user.dashboard');
    route::get('/profile',[\App\Http\Controllers\UserController::class,'proFile'])->name('user.profile');
});
//for admin
Route::prefix('admin')->group(function () {

    route::get('/login',[\App\Http\Controllers\AdminController::class,'login'])->name('admin.login');
    route::post('/login-action',[\App\Http\Controllers\AdminController::class,'loginAction'])->name('admin.loginAction');
    route::post('/register-action',[\App\Http\Controllers\AdminController::class,'register'])->name('admin.registerAction');
    Route::middleware(['authAdmin'])->group(function () {
    route::get('/dashboard',[\App\Http\Controllers\AdminController::class,'dashboard'])->name('admin.dashboard');
    route::get('/profile',[\App\Http\Controllers\AdminController::class,'proFile'])->name('admin.profile');

    });
});

