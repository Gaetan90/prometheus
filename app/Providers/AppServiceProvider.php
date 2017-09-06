<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Guard $auth)
    {
        view()->composer('*', function($view) use ($auth)
        {
            $isPrometheus = false;

            if(Auth::check())
            {
                $members = array(1);
                $user_id = Auth::user()->id;

                if(in_array($user_id, $members)) 
                {
                    $isPrometheus = true;
                }
            }
           
            $view->with('isPrometheus', $isPrometheus);
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
