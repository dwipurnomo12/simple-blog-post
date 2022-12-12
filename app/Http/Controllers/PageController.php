<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index(){
        return view('index', [
            'pages' => Page::all()
        ]);
    }

    public function show(Page $page){
        return view('page', [
            'title' => $page->name,
            'pages' => $page
        ]);
    }
}
