<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\View;
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
        Model::shouldBeStrict();

        Paginator::useBootstrapFive();

        //% Role
        Gate::define('admin', function (User $user): bool {
            return (bool) $user->is_admin;
        });

        //% Cache top users
        $topUsers = Cache::remember('topUsers', now()->addMinutes(5), function () {
            return User::withCount('ideas')
                ->orderBy('ideas_count', 'DESC')
                ->take(5)
                ->get();
        });

        //% Share $topUsers (Users with the most ideas) variable between all views
        View::share(
            'topUsers',
            $topUsers,
        );

    }
}
