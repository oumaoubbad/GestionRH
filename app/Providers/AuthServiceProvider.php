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

        Gate::define("responsable_rh", function(User $user){
            return $user->hasRole("responsable_rh");
        });


        Gate::define("employe", function(User $user){
            return $user->hasRole("employe");
        });


        // Gate::before(function (User $user) {
        //    return $user->hasRole("superadmin");
        // });
    }
}
