<?php

namespace snw\ComingSoon;

use Illuminate\Support\ServiceProvider;

class ComingSoonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // publish views
         $this->publishes([
             __DIR__.'/views' => base_path('resources/views/vendor/comingsoon'),
         ], 'views');

        $this->loadViewsFrom(__DIR__ . '/views', 'comingsoon');

        // publish config
        $this->publishes([
            __DIR__ . '/config/comingsoon.php' => config_path('comingsoon.php'),
        ], 'config');

        $this->mergeConfigFrom(
            __DIR__ . '/config/comingsoon.php',
            'comingsoon'
        );

        // publish assets
        $this->publishes([
            __DIR__ . '/assets/js' => base_path('public/js'),
        ], 'assets');

        $this->publishes([
            __DIR__ . '/assets/css' => base_path('public/css'),
        ], 'assets');

        //$this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        // publish migrations
        $this->publishes([
            __DIR__ . '/database/migrations' => base_path('database/migrations'),
        ], 'migrations');

    }

    public function register()
    {
        //
    }
}
