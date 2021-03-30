<?php

namespace App\Providers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
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
        //Sort the DigitalOcean Managed Database Cluster MySQL 8 - sql_require_primary_key error
        DB::statement('SET SESSION sql_require_primary_key=0');

        Schema::defaultStringLength(191);

    }
}
