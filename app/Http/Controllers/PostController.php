<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('blog', [
            "title" => "Blog",
            "posts" => $posts
        ]);
    }

    public function show(Post $post){
        
        return view('detailBlog', [
            "title" => "Blog Detail",
            "post" => $post
        ]);
    }
}
