<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use URL;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       /* if (env('APP_ENV') !== 'local') {
        URL::forceScheme('https');
        } */
		  ini_set("memory_limit", "1000M");
          ini_set('post_max_size', '5000M');
          ini_set('upload_max_filesize', '5000M');
    }
}
