<?php

namespace App\Providers;

use App\Policies\ModelPolicy;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('permission', function (User $user, $permission) {
            return $user->hasDefinePrivilege($permission);
        });

        Gate::define('createMark',ModelPolicy::class.'@storeMore');
    }
}
