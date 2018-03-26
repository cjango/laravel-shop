<?php
namespace cjango\Shop;

use Illuminate\Support\ServiceProvider;

class ShopServiceProvider extends ServiceProvider
{

    protected $defer = true;

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/config.php' => config_path('cshop.php'),
        ]);

        $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/config.php', 'cshop'
        );

        $this->app->singleton('shop', function ($app) {
            return new Shop($app);
        });
    }

    public function provides()
    {
        return ['shop'];
    }

}
