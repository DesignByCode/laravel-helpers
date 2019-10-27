<?php

namespace DesignByCode\Helpers\Providers;

use DesignByCode\Helpers\Set;
use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

       $this->app->alias(Set::class,'set');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/helpers.php' => config_path('helpers.php'),
        ], 'helpers');
    }

    public function provides()
    {
        return ['set'];
    }

}
