<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Videojuego;
use Illuminate\Database\Eloquent\Model;
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
        Model::preventLazyLoading();

        // Gate::define('edit-videojuego', function (User $user, Videojuego $videojuego) {
        //     return $videojuego->user->is($user);
        // });
    }
}
