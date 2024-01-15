<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppController;

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


Route::middleware(['guest'])->group(function(){
    Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
    Route::get('/menu',[App\Http\Controllers\HomeController::class, 'menu'])->name('menu');
    Route::get('/tentangkami',[App\Http\Controllers\HomeController::class, 'about'])->name('about');
    Route::get('/kontak',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

    Route::get('/login', [App\Http\Controllers\AuthController::class, 'index'])->name('auth');
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
    Route::get('/reg', [App\Http\Controllers\AuthController::class, 'create'])->name('registrasi');
    Route::post('/reg', [App\Http\Controllers\AuthController::class, 'register']);
    Route::get('/verify/{verify_key}', [App\Http\Controllers\AuthController::class, 'verify']);
});

Route::middleware(['auth'])->group(function(){
    Route::redirect('/home', '/user');
    Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('userAkses:admin');
    Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('userAkses:user');
});

