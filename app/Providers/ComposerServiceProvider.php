<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\City;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return bool
     */
    public function register()
    {
        return true;
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Support\Facades\View::composer(
            'layouts.app',
            function ($view) {
                $view->with(
                    [
                        'cities'     => City::get(),
                        'categories' => Category::get(),
                    ]
                );
            }
        );
    }
}
