<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

<<<<<<< HEAD
use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\Schema;

=======

use Illuminate\Database\Schema\Builder;

use Illuminate\Support\Facades\Schema;


>>>>>>> 3bbe32d848c8536144dc4ca36c51bc2dc11fa32b

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

	Builder::defaultStringLength(191); // Update defaultStringLength
    }
}
