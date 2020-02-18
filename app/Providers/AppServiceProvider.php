<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;

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
        // Let Inertia track the version of our assets so it can hard-reload when necessary
        Inertia::version(function () {
            return md5_file(public_path('mix-manifest.json'));
        });
    }
}
