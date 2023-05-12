<?php

namespace App\Providers;

use App\Models\ContactPost;
use App\Models\News;
use App\Models\Registration;
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
        view()->composer('layouts.layout',function ($view){
            $view->with('news_l',News::query()->orderByDesc('created_at')->limit('3')->get());
        });
        View::composer('layouts.admin_layout',function ($view){
            $view->with([
                'email_l'=>ContactPost::query()->orderByDesc('created_at')->where('watched','=',0)->limit('2')->get(),
                'pochta_c_l'=>ContactPost::query()->where('watched','=',0)->count(),
                'reg_l'=>Registration::query()->orderByDesc('created_at')->where('watched','=',0)->limit('2')->get(),
                'reg_c_l'=>Registration::query()->where('watched','=',0)->count(),
            ]);
        });
    }
}
