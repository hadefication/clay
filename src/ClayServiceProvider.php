<?php
namespace Hadefication\Clay;

use Illuminate\Support\ServiceProvider;

class ClayServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('clay', function () {
            return $this->app->make('Hadefication\Clay\clay');
        });
    }

    /**
     * Boot
     *
     * @return void
     */
    public function boot()
    {
        // Add resources here...
    }
}
