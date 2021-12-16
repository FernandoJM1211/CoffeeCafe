<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        return view('shop', [
            'title' => 'Shop',
            'items' => Item::all()
        ]);
    }
}
