<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('customer.menu', compact('menus'));
    }
}
