<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slidebar;
use Illuminate\Support\Facades\storage;

class HomeController extends Controller
{
    public function index()
    {

        $slidebars = Slidebar::all();
        return view('home.index', [
            'slidebar' => $slidebars
        ]);
    }
}
