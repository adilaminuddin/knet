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
        $categories = Category::all();
        $posts = Post::latest()->approved()->published()->take(6)->get();
        return view('index',compact('categories','posts'));
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
