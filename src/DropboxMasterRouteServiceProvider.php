<?php namespace Jeylabs\DropboxMaster;

use Illuminate\Support\ServiceProvider;

class DropboxMasterRouteServiceProvider extends ServiceProvider
{
    public function register()
    {

    }
    public function boot()
    {
        dd('jana here');

//        $this->publishes([
//            __DIR__.'/config/smart-route.php' => config_path('smart-route.php'),
//        ]);
//
//        $this->mergeConfigFrom(
//            __DIR__.'/config/smart-route.php', 'smart-route'
//        );
//
//        if (! $this->app->routesAreCached()) {
//            require __DIR__.'/Http/routes.php';
//        }

    }
}
