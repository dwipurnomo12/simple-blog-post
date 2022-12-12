<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;


class AuthorController extends Controller
{
    public function index(User $author){
        return view('author', [
            'title'  => 'Author : '.$author->name,
            'author' => $author,
            'posts'  => $author->post->toQuery()->paginate(6)
        ]);
    }
}
