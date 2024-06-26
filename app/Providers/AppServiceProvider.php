<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
      
    /**
     * Register any application services.
     *
     * @return void
     */

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
       Paginator::useBootstrapFour();  
       \URL::forceScheme('https');
       $this->app['request']->server->set('HTTPS','on');
    }
}
