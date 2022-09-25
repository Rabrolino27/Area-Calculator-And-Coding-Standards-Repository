<?php

namespace App\Providers;

use App\Services\Circle;
use App\Services\Triangle;
use App\Contracts\CircleInterface;
use App\Contracts\TriangleInterface;
use Illuminate\Support\ServiceProvider;

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
        //
        
    }
}
