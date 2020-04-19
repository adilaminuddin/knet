<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;

class ArticleController extends Controller
{
    public function index($slug)
    {
        # code...
        $category = Category::where('slug',$slug)->first();
        $posts = $category->posts()->get();
        return view('article',compact('posts'));
        #return view('article');
    }
    public function detail($slug){
        $posts = Post::where('slug',$slug)->first();
        $tags = Tag::all();
        $category = Category::find($posts->category_id);
        $relatedPosts = $category->posts()->take(5)->get();
        //dd($posts);
        $ps = array($posts);
        //dd($ps);
        return view('artikel.detail',compact('ps','relatedPosts'));
    }

    public function postByTag($slug){
        $tag = Tag::where('slug',$slug)->first();
        $posts = $tag->posts()->get();
        return view('index',compact('posts'));
    }

    public function postByCategory($slug){
        $categorye = Category::where('slug',$slug)->first();
        $posts = $categorye->posts()->get();
        return view('artikel.bycategory',compact('posts'));
    }

}
