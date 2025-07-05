<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\HomePage;
use App\Livewire\Product\DetailProduct;
use App\Livewire\Product\ShowProduct;
use App\Livewire\Transaction\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');


Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/detail/{id}', DetailProduct::class)->name('detail');

Route::middleware('auth')->group(function () {
    Route::get('/cart', Cart::class)->name('cart');
});


// END-HOME

// AUTH

Route::get('/login', Login::class)->name('login');
Route::get('/regist', Register::class)->name('user.regist');
Route::get(
    '/logout',
    function () {
        Auth::logout();
        session()->flush();
        return redirect('/login');
    }
)->name('user.logout');


// END-AUTH
