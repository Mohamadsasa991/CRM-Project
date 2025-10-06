<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

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
            Paginator::useBootstrap();

        Vite::prefetch(concurrency: 3);

        // Gate::define('edit-tasks',function(User $user){
        //     return $user->name=='admin';
        // });

        // Gate::define('edit-projects',function(User $user){
        //     return $user->name=='admin';
        // });
    }
}
