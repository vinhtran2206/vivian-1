<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\categories;
use App\smallCategories;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()-> composer('header',function($view){
            $cate= categories::all();
            $small=smallCategories::all();
            //$small=smallCategories::where('id_category',$cate->id)->get();
            $view->with('cate',$cate)
            ->with('small',$small);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
