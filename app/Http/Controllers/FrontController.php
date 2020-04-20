<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;


class FrontController extends Controller
{
    public function index()
    {
        # code...
        return view('index');
    }

    public function hdr()
    {
        # code...
        #$posts = Post::get()->take(6);
        $acategories = Category::get()->take(6);
        return view('frontpart.header',compact('acategories'));
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
