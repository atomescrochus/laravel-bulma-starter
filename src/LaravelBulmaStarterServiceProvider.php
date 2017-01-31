<?php

namespace Atomescrochus\LaravelBulmaStarter;

use Illuminate\Support\ServiceProvider;

class LaravelBulmaStarterServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // use this if your package has views
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'laravel-bulma-starter');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/laravel-bulma-starter'),
        ], 'views');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
