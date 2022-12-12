<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $post_total = DB::table('posts')
            ->selectRaw('count(*) as total')->first();

        $category_total = DB::table('categories')
            ->selectRaw('count(*) as total')->first();

        $page_total = DB::table('pages')
            ->selectRaw('count(*) as total')->first();
        
        return view('dashboard.index', [
            'title' => 'dashboard',
            'post_total' => $post_total,
            'category_total' => $category_total,
            'page_total' => $page_total
        ]);
    }
}
