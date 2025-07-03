<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [HomeController::class, 'shop']);
Route::get('/detail/{id}', [HomeController::class, 'detail']);

Route::middleware('auth')->group(function () {
    Route::get('/cart', [HomeController::class, 'cart']);
    Route::get('/checkout', [HomeController::class, 'checkout']);
    Route::get('/getToken', [HomeController::class, 'getToken']);
    Route::get('/riwayat', [HomeController::class, 'riwayat']);
    Route::get('/addToCart/{id}', [HomeController::class, 'addToCart']);
    Route::get('/addFormCart/{id}', [HomeController::class, 'addFormCart']);
    Route::get('/DelFormCart/{id}', [HomeController::class, 'DelFormCart']);
    Route::get('/DestroyFormCart/{id}', [HomeController::class, 'DestroyFormCart']);
});


// END-HOME

// AUTH

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/userLogin', [AuthController::class, 'userLogin'])->name('user.login');
Route::post('/userRegist', [AuthController::class, 'userRegist'])->name('user.regist');
Route::get('/regist', [AuthController::class, 'regist']);
Route::get('/logout', [AuthController::class, 'logout']);


// END-AUTH
