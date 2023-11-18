<?php

namespace App\Providers;

use App\Test\Test;
use App\Test\Sub;
use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('test', function() {
            return new Test(config("test"));
        });

        $this->app->singleton('sub', function() {
            return new Sub(config("test.num"));
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
