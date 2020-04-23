<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

<<<<<<< HEAD
use Illuminate\Database\Schema\Builder;
=======
use Illuminate\Support\Facades\Schema;

>>>>>>> 1901aa8c131127c62613e25554cdfedde179ce24

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
