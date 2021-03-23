<?php

namespace App\Providers;

use App\Models\Footer;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Support\Facades\View;
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
        view()->share('footer', Footer::first() ?? null);
        view()->share('settings', Setting::first() ?? null);
        view()->share('social', Social::all() ?? null);
    }
}
