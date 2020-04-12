<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicCotroller extends Controller
{
    protected $namespace = '';
    public function index()
    {
        # code...
        return view('welcome');
    }
}
