<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function index(){

        $news = Post::latest();

        if(request('search')){
            $news->where('title', 'like', '%'. request('search') . '%')->orWhere('body','like','%' . request('search') . '%');
        }

        return view('news',[
            "title" => "All News",
            "active" => 'news',
            "news" => $news->get()
                
        ]);
    }

    public function show(Post $post){

        return view('post', [
            "title" => "Single Post",
            "active" => 'news',
            "post" => $post
        ]);
    }
}
