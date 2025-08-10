<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
public function index()
{
    // Misalnya mau ambil 9 item per halaman
    $items = Item::paginate(6);

    return view('customer.menu', compact('items'));
}

}
