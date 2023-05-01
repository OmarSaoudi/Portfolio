<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

        view()->composer('admin.login', function ($view) {
            $view->with('settings', Setting::first());
        });

        view()->composer('frontend.layouts.footer', function ($view) {
            $view->with('settings', Setting::first());
        });

        view()->composer('frontend.welcome', function ($view) {
            $view->with('settings', Setting::first());
        });

        view()->composer('frontend.layouts.main-headerbar', function ($view) {
            $view->with('settings', Setting::first());
        });

        view()->composer('frontend.pages.team', function ($view) {
            $view->with('teams', Team::first());
        });

        view()->composer('frontend.pages.gallery', function ($view) {
            $view->with('galleries', Gallery::first());
        });

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
