<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        //
        Gate::define('manage-plan1', function (User $user) {
            return $user->role_num == 1;                                       
        });
        Gate::define('manage-plan2', function (User $user) {
            return $user->role_num == 2;
        });
        Gate::define('manage-plan3', function (User $user) {
            
            return $user->role_num == 3;
        });
        Gate::define('manage-plan4', function (User $user) {
            
            return $user->role_num == 4;
        });
    }
}
