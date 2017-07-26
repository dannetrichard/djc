<?php
namespace dannetrichard\DJC;
use Illuminate\Support\ServiceProvider;
class DjcServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Djc::class, function () {
            return new Djc();
        });
        $this->app->alias(Djc::class, 'Djc');
    }
}