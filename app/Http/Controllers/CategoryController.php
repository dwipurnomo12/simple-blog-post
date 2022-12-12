<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(Category $category){

        return view('category', [
            'title' => 'Category '.$category->name,
            'category' => $category->name,
            'active' => $category->name,
            'posts' => $category->posts->sortByDesc('created_at')->paginate(5)
        ]);
    }
}
