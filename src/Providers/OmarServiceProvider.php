<?php

namespace Altaezi\Omar\Providers;

use Illuminate\Support\ServiceProvider;

class OmarServiceProvider extends ServiceProvider
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
       info('altaezi\omar bootstraped');
    }
}
