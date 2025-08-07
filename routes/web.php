<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Models\Item;


Route::get('/', [ItemController::class, 'index']);

Route::get('/checkout', function () {
    return view('customer.checkout');
})->name('checkout');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart', [CartController::class, 'show'])->name('cart');

Route::post('/cart/update/{id}', [CartController::class, 'updateQty'])->name('cart.update');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
