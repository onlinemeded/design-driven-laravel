<?php

namespace OnlineMedEd\DomainDrivenLaravel;

use Illuminate\Support\ServiceProvider;
use OnlineMedEd\DomainDrivenLaravel\Commands\DomainMakeCommand;

class DomainDrivenLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'domain-driven-laravel');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'domain-driven-laravel');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('domain-driven-laravel.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/domain-driven-laravel'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/domain-driven-laravel'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/domain-driven-laravel'),
            ], 'lang');*/

            // Registering package commands.
             $this->commands([
                 DomainMakeCommand::class
             ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'domain-driven-laravel');

        // Register the main class to use with the facade
        $this->app->singleton('domain-driven-laravel', function () {
            return new DomainDrivenLaravel();
        });
    }
}
