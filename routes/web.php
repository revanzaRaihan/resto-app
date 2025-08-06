<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Models\Menu;

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/', function () {
    $menus = Menu::all();
    return view('customer.menu', compact('menus'));
});
Route::get('/cart', function () {
    return view('customer.cart');
})->name('cart');
Route::get('/checkout', function () {
    return view('customer.checkout');
})->name('checkout');

