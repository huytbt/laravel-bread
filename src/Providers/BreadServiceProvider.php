<?php

namespace PhpSoft\Bread\Providers;

use Illuminate\Support\ServiceProvider;
use PhpSoft\Bread\Console\Commands\MakeResource;

class BreadServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap service.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeResource::class,
            ]);
        }
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
