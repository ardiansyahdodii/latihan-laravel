<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){ 
        return view('blog', [
            "title" => "All Posts",
            "posts" => Post::latest()->get(),
        ]);
    }

    public function show(Post $post){
        
        return view('detailBlog', [
            "title" => "Post Detail : $post->title",
            "post" => $post
        ]);
    }
}
