<?php

namespace Wagg\WhatAreYouDoingWhileWaitingForComposer\Providers;

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
        'Wagg\WhatAreYouDoingWhileWaitingForComposer\Model' => 'Wagg\WhatAreYouDoingWhileWaitingForComposer\Policies\ModelPolicy',
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
    }
}
