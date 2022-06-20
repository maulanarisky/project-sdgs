<?php

namespace App\Providers;

use App\Models\Tahun;
use Illuminate\Support\ServiceProvider;

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
        $tahuns = Tahun::all();
        view()->share('tahuns', $tahuns);
    }
}
