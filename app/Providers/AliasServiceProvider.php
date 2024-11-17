<?php

namespace App\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;


class AliasServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('Socialite', Laravel\Socialite\Facades\Socialite::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
