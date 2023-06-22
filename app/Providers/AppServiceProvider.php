<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\Category;
use App\Models\Pagecontact;
use Illuminate\Pagination\Paginator;
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
        Paginator::useBootstrap();
        $settings = Setting::first();
        $contact = Pagecontact::first();
        view::share('contact',$contact);
        view::share('settings',$settings);
    }
}
