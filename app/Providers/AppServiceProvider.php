<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Livewire::setUpdateRoute(static function ($handle) {
            return Route::post('/shop/livewire/update', $handle)
                ->middleware('api');
        });

        Livewire::setScriptRoute(static function ($handle) {
            return Route::get('/shop/livewire/livewire.js', $handle)->name('get-route');
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
