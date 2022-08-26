<?php

namespace AmericanTechnologies\ScriptTimeLogger;

use Illuminate\Support\ServiceProvider;

class ScriptTimeLoggerServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ScriptTimeLogger::class, function ($app) {
            return new ScriptTimeLogger;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            ScriptTimeLogger::class
        ];
    }
}
