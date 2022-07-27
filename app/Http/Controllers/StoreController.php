<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Slidebar;
use Illuminate\Support\Facades\storage;

class StoreController extends Controller
{
    public function index()
    {
        $products = product::all();
        $slidebars = Slidebar::all();
        return view('user.store', [
            'slidebar' => $slidebars,
            'product' => $products,
        ]);
    }
}
