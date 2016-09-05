<?php

namespace ArtisanCMS\AdminViews\Providers;

use Illuminate\Support\ServiceProvider;

class ArtisanCMSAdminViewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views/admin', 'admin');

        $this->publishes([
            __DIR__.'/../public/' => public_path('cms')
        ], 'public');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
