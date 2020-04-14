<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        # code...
        return view('welcome');
    }

    public function legal()
    {
        # code...
        return view('legal');
    }
}
