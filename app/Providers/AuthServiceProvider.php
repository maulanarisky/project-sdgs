<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('superadmin', function (User $user) {
            return $user->role_id === 1;
        });

        Gate::define('skpd', function (User $user) {
            return $user->role_id === 2;
        });

        Gate::define('pusat', function (User $user) {
            return $user->role_id === 3;
        });

        Gate::define('mitraswasta', function (User $user) {
            return $user->role_id === 4;
        });

        Gate::define('umkm', function (User $user) {
            return $user->role_id === 5;
        });
        Gate::define('kabkota', function (User $user) {
            return $user->role_id === 6;
        });
        Gate::define('bappeda', function (User $user) {
            return $user->role_id === 7;
        });
    }
}
