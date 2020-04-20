<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Post;
use App\Tag;
use App\Category;

class ArticleController extends Controller
{
    public function index()
    {
        # code...
        $category = Category::all();
        $posts = Post::latest()->approved()->published()->paginate(6);
        return view('article',compact('posts'));
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
        $category = Category::where('slug',$slug)->first();
        $posts = $category->posts()->approved()->published()->get();
        return view('artikel.bycategory',compact('category','posts'));
    }
    public function Category(){
        $category = Category::all();
        return view('artikel.allcategory',compact('category'));
    }

}
