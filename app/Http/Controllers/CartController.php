<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class CartController extends Controller
{
    public function add(Request $request)
{
    $cart = session()->get('cart', []);
    $item = Item::findOrFail($request->item_id);

    if (isset($cart[$item->id])) {
        $cart[$item->id]['qty']++;
    } else {
        $cart[$item->id] = [
            'name' => $item->name,
            'price' => $item->price,
            'img' => $item->img,
            'qty' => 1,
        ];
    }
    session(['cart' => $cart]);
    return redirect()->back()->with('success', 'Berhasil ditambahkan ke keranjang!');
}
public function show()
{
    $cart = session()->get('cart', []);
    return view('customer.cart', compact('cart'));
}

public function updateQty(Request $request, $id)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $newQty = (int) $request->qty;
        if ($newQty > 0) {
            $cart[$id]['qty'] = $newQty;
        } else {
            unset($cart[$id]);
        }
    }

    session(['cart' => $cart]);
    return redirect()->route('cart');
}

public function remove($id)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        unset($cart[$id]);
    }

    session(['cart' => $cart]);
    return redirect()->route('cart');
}

}
