<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    
    public function index(){

        $posts = Post::latest();

        if(request('search')){
            $posts->where('title', 'like', '%'. request('search'). '%');
        }

        return view('index', [
            'title' => 'Simple Blog Post',
            'page'  => 'Semua Post',
            'posts' => $posts->paginate(6),
            'active' => '/'
        ]);
    }

    public function show(Post $post){
        return view('post', [
            'title' => $post->title,
            'post' => $post
        ]);
    }



}
