<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
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
    public function boot()
    {
        Paginator::useBootstrapFive();

        Gate::define('edit-users', function ($user) {
            return $user->isDirecteur();
        });

        gate::define('manage-users',function ($user){
            return $user->hasAnyRole();
        });


                    // en cas plusieur roles ayant le permission:
        // gate::define('manage-users',function ($user){
        //     return $user->hasAnyRole(['directeur','administrateur']);
        // });

        Gate::define('delete-users', function ($user) {
            return $user->isDirecteur();
        });
    }
}
