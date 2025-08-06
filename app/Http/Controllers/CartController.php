<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $item = Item::findOrFail($request->item_id);

        $cart = session()->get('cart', []);
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
}
