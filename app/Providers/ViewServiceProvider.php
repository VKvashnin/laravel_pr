<?php

namespace App\Providers;

use App\Models\Country;
use App\Models\Genre;
use App\Models\Year;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('genres', Genre::get() );
        view()->share('countries', Country::get() );
        view()->share('years', Year::get() );
    }
}
