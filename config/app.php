<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    // ...

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class, // Assurez-vous que cette ligne est présente et décommentée
        App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class, // Assurez-vous que cette ligne est présente et décommentée
    ])->toArray(),

    'aliases' => Facade::defaultAliases()->merge([
        // ...
        'Auth' => Illuminate\Support\Facades\Auth::class, // Assurez-vous que cette ligne est présente
    ])->toArray(),

];
