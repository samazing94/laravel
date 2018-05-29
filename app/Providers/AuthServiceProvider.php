<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use View;
use Carbon\Carbon;
use Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
       // $this->registerPolicies();
        View::share('myname', 'Sam');
        $age = Carbon::createFromDate(1994, 7, 5)->age;
        View::share('age', $age);
        View::share('auth', Auth::user());
        View::composer('*', function($view){
            $view->with('auth', Auth::user());
        });
        //
    }
}
