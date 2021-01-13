<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['featured_posts'] = Post::with(['category','author'])->published()->where('is_featured',1)->get();
        $data['latest_posts'] = Post::with(['category','author'])->published()->orderBy('id','desc')->paginate(8);
        return view('front.index',$data);
    }
    public function details($id)
    {
        $post = Post::with(['category','author'])->findOrFail($id);
        $post->increment('total_hit');
        $data['post'] = $post;
        $data['related_posts'] = Post::with(['category','author'])->published()->where('category_id',$post->category_id)->orderBy('id','desc')->limit(3)->get();
        return view('front.details',$data);
    }
    public function about()
    {
        return view('front.about');
    }
    public function category($id)
    {
        $data['posts'] = Post::where('category_id',$id)->published()->orderBy('id','DESC')->paginate(8);
        return view('front.category_posts',$data);
    }
}
