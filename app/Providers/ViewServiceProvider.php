<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Cat;
use App\Setting;
class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('front.inc.header' , function($view)
        {
            $view->with('cats',Cat::select('id','name')->get());
            $view->with('sett',Setting::select('logo','favicon')->first());
        });
        view()->composer('front.inc.footer' , function($view)
        {
            
            $view->with('sett',Setting::first()); //all things
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
