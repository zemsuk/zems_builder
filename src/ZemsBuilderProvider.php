<?php

namespace Zems\ZemsBuilder;

use Illuminate\Support\ServiceProvider;

class ZemsBuilderProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->LoadViewsFrom(__DIR__.'/views', 'zems_builder');
        $this->app->singleton(ZemsBuilderController::class, function(){
            return new ZemsBuilderController();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Route.php');
        // $this->publishes([
        //     __DIR__.'/../assets' => public_path('/'),
        // ], 'public');
        $this->app->singleton('command.mycommand', function () {
            return "@php artisan vendor:publish --tag=public --force";
        });
        //php artisan vendor:publish --tag=public --force
    }
}
