<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class MenuController extends Controller
{
    public function index(){
        return view('menu', [
            'title' => 'Menu',
            'items' => Item::all()
        ]);
    }
}
