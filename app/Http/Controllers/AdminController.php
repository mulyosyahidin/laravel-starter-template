<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function table()
    {
        return view('admin.table');
    }

    public function form()
    {
        return view('admin.form');
    }
}
