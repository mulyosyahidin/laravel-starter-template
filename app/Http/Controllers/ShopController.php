<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        return view('public.index');
    }

    public function product()
    {
        return view('public.product');
    }

    public function checkout()
    {
        return view('public.checkout');
    }
}
