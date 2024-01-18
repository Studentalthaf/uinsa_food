<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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

    Route::get('/menu_user',[UserController::class, 'menu_user'])->name('menu_user')->middleware('userAkses:user');
    Route::get('/tentangkami_user',[UserController::class, 'about_user'])->name('about_user')->middleware('userAkses:user');
    Route::get('/kontak_user',[UserController::class, 'contact_user'])->name('contact_user')->middleware('userAkses:user');

    Route::get('/shopping-cart', [App\Http\Controllers\UserController::class, 'menuOrder'])->name('shopping.order')->middleware('userAkses:user');
    Route::get('/menu/{id}', [App\Http\Controllers\UserController::class, 'addMenutoOrder'])->name('addMenu.to.order')->middleware('userAkses:user');
    Route::patch('/update-shopping-cart', [App\Http\Controllers\UserController::class, 'updateOrder'])->name('update.sopping.order')->middleware('userAkses:user');
    Route::delete('/delete-cart-menu', [App\Http\Controllers\UserController::class, 'deleteMenu'])->name('delete.cart.menu')->middleware('userAkses:user');

    Route::get('/data_pengguna', [App\Http\Controllers\AdminController::class, 'data_pengguna'])->name('data_pengguna')->middleware('userAkses:admin');
    Route::get('/datakategori', [AdminController::class, ' data_kategori'])->name('datakategori')->middleware('userAkses:admin');
    Route::get('/datavendor', [AdminController::class, 'data_vendor'])->name('datavendor')->middleware('userAkses:admin');
    Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('userAkses:user');
    Route::get('/user/order', [UserController::class, 'order_page'])->name('order_page')->middleware('userAkses:user');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});