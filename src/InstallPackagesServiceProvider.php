<?php

namespace Pkboom\InstallPackages;

use Illuminate\Support\ServiceProvider;
use Pkboom\InstallPackages\Commands\InstallPackages;

class InstallPackagesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/packages.php' => config_path('packages.php'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallPackages::class,
            ]);
        }
    }
}
