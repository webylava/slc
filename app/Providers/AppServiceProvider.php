<?php

namespace App\Providers;

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
        //
        $global = \App\Models\Setting::where('key','=','global')->first();
        //dd(json_decode($global->value)->language);
        //dd(\App::currentLocale());
        \App::setLocale(json_decode($global->value)->language);
        //View::share('language', json_decode($global->value)->language);
    }
}
