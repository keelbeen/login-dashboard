<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slidebar;
use App\Models\product;
use Illuminate\Support\Facades\storage;

class HomeController extends Controller
{
    public function index()
    {

        $products = product::all();
        $slidebars = Slidebar::all();
        return view('home.index', [
            'slidebar' => $slidebars,
            'product' => $products,
        ]);
    }
    public function index2()
    {
        return view('home.detail');
    }
}
