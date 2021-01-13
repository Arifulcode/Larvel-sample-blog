<?php

namespace App\Providers;

use App\Category;
use App\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);
        view()->composer('front._right_sidebar',function($view){
            $data['popular_posts'] = Post::published()->orderBy('total_hit','desc')->limit(3)->get();
            $data['categories'] = Category::all();
            $view->with($data);
        });
        View::composer('layouts.front._nav',function($view){
            $view->with('categories',Category::all());
        });
    }
}
