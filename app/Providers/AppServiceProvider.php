<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Services\TestService1;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
      // $this->app->bind('TestService1', function (){
      //    return new TestService1();
      // });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
