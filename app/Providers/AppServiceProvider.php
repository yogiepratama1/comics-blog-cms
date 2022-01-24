<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Builder::macro('search', function ($field, $string) {
        //     return $string ? $this->where($field, 'like', '%' . $string . '%') : $this;
        // });

        Gate::define('owner', function (User $user) {
            return $user->role_id == '1';
        });
        Gate::define('admin', function (User $user) {
            return $user->role_id == '2';
        });
    }
}
