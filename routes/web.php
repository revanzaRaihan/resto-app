<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Models\Item;


Route::get('/menu', [ItemController::class, 'index']);

Route::get('/', function () {
    $items = Item::all();
    return view('customer.menu', compact('items'));
});
Route::get('/cart', function () {
    return view('customer.cart');
})->name('cart');
Route::get('/checkout', function () {
    return view('customer.checkout');
})->name('checkout');

Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
