<?php

namespace Manyapp\DuskApiConf;

use Illuminate\Support\ServiceProvider;

class DuskApiConfServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Routes/Route.php');
        $this->loadViewsFrom(__DIR__.'/Resources/Views', 'duskapiconf');
        
        $this->mergeConfigFrom(
            __DIR__.'/../config/config.php',
            'manyapp.duskapiconf'
        );

        $router = $this->app['router'];
        $router->pushMiddlewareToGroup('web', \Manyapp\DuskApiConf\Middleware\ConfigStoreMiddleware::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}