<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composers([
            'App\Http\ViewComposers\ProductComposer' => ['website.product'],
            'App\Http\ViewComposers\ProviderTypesComposer' => ['website.provider.list'],
            'App\Http\ViewComposers\Dashboard\Categories\ListComposer' => ['dashboard.pages.categories.list'],
            'App\Http\ViewComposers\Dashboard\ProviderTypes\ListComposer' => ['dashboard.pages.providertypes.list']
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
