<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Profile;
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

        // Passport::routes();



        Gate::define('isadmin', function () {

            return auth()->user()->role == 'admin';
        });

        Gate::define('isarchitect', function () {

            return auth()->user()->role == 'architect';
        });

        Gate::define('isuser', function () {

            return auth()->user()->role == 'user';
        });

        Gate::define('ismodir', function () {
            return auth()->user()->role == 'modir';
        });

        // Gate::define('update', function () {


        //     return auth()->user()->role == 'admin';
        // });

        // Gate::define('delete', function () {

        //     return auth()->user()->role == 'admin';
        // });
    }
}
