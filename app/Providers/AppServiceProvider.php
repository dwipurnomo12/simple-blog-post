<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Post;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

        $posts = Post::latest()->paginate(5);
        view::share('posts', $posts);

        $posts = Post::latest()->get();
        view::share('poststable', $posts);

        $menu = Menu::where('location', 'header')->get();
        view::share('menus', $menu);

        $menu = Menu::where('location', 'footer')->get();
        view::share('pagesMenu', $menu);

        $author = User::all()->first();
        view::share('author', $author);




        if(!Collection::hasMacro('paginate')){
            Collection::macro('paginate', 
                function ($perPage = 10, $page = null, $options = []){
                    $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
                    return (new LengthAwarePaginator(
                        $this->forPage($page, $perPage), $this->count(), $perPage, $page, $options))
                    ->withPath('');
                });
        }
        
    }
}
