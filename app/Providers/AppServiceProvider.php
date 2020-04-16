<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//Import pour le schema
use Illuminate\Support\Facades\Schema;

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
        // Probleme si erreur clé est trop longue.
        Schema::defaultStringLength(191);
    }
}
