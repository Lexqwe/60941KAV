<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::defaultView('pagination::tailwind');

        Gate::define('edit-car', function ($user, $car) {
            return $user->role === 'admin' || $user->role === 'manager';
        });

        Gate::define('destroy-car', function ($user, $car) {
            return $user->role === 'admin';
        });
    }
}
