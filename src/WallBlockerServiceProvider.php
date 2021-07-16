<?php
namespace Piseth\WallBlocker;

use Illuminate\Support\ServiceProvider;

class WallBlockerServiceProvider extends ServiceProvider
{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'wb');
        $this->loadMigrationsFrom(__DIR__.'/databases/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/wallblocker.php', 'wallblocker.php'
        );
        $this->publishes([
            __DIR__.'/config/wallblocker.php'   => config_path('wallblocker.php')
        ]);
    }

    public function register()
    {
        
    }
}