<?php

namespace Avram\Caffeinated\Providers;

use Illuminate\Support\ServiceProvider;

class DatabaseModulesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/../../migrations/' => database_path('migrations')
        ], 'migrations');
    }
}
