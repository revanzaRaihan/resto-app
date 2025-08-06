<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
{
    $items = Item::all();
    return view('customer.menu', compact('items'));
}
}
