<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */


    protected $policies = [
    'App\Task' => 'App\Policies\TaskPolicy',
];



    public function register()
    {


        view()->composer('frontend.layouts.sidebar', function($view){
    //get all parent categories with their subcategories
    $categories = \App\Models\Category::where('parent_id', 0)->with('subcategories')->get();
    //attach the categories to the view.
    $view->with(compact('categories'));
});

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
