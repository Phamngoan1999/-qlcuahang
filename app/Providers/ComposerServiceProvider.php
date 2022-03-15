<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            [
                'hethong.Vtrangchitiet',
                'hethong.Vtrangchu',
                'hethong.Vtranghangxe',
            ],
            'App\Http\ViewComposers\XeComposers'
        );
    }
}
