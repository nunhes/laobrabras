<?php

namespace App\Providers;

use Illuminate\Auth\Asuntos\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\AsuntoServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Asunto;
use Illuminate\Pagination\Paginator;

class AsuntoServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
      //engadir paxinador
      Paginator::useBootstrap();
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
