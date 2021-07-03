<?php

namespace Pkboom\InstallPackages;

use Illuminate\Support\ServiceProvider;
use Pkboom\InstallPackages\Commands\InstallPackages;
use Pkboom\InstallPackages\Commands\RemovePackages;

class InstallPackagesServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/packages.php', 'packages'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/packages.php' => config_path('packages.php'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallPackages::class,
                RemovePackages::class,
            ]);
        }
    }
}
