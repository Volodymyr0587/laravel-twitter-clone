<?php

namespace App\Providers;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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
        Paginator::useBootstrapFive();

        //% Role
        Gate::define('admin', function (User $user) : bool {
            return (bool) $user->is_admin;
        });

        //% Permissions
        Gate::define('idea.delete', function (User $user, Idea $idea) : bool {
            return (bool) $user->is_admin || $idea->user->is($user);
        });

        Gate::define('idea.edit', function (User $user, Idea $idea) : bool {
            return (bool) $user->is_admin || $idea->user->is($user);
        });
    }
}
