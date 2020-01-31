<?php

namespace Mcc\Enquiry;

use Illuminate\Support\ServiceProvider;

class EnquiryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->loadViewsFrom(__DIR__.'/Resources/views', 'enquiry');
        $this->loadTranslationsFrom(__DIR__ . '/Resources/lang', 'enquiry');

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->make('Mcc\Enquiry\Http\Controllers\EnquiryController');
        $this->mergeConfigFrom(
            __DIR__ . '/Config/menu.php', 'menu.admin'
        );

    }
}
