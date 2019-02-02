<?php

namespace Hovsepyan\LaravelSwagger;

use Illuminate\Support\ServiceProvider;

class SwaggerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                GenerateSwaggerDoc::class,
            ]);
        }

        $source = __DIR__.'/../config/laravel-swagger.php';

        $this->publishes([
            $source => config_path('laravel-swagger.php'),
        ]);

        $this->mergeConfigFrom(
            $source, 'laravel-swagger'
        );
    }
}