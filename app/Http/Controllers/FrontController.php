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

    public function hdr()
    {
        # code...
        return view('frontpart.header');
    }
    public function ftr()
    {
        # code...
        return view('frontpart.footer');
    }

    public function legal()
    {
        # code...
        return view('legal');
    }
}
