
https://github.com/amranidev/scaffold-interface

https://github.com/amranidev/scaffold-interface

ver: https://dev.to/tutsmake/laravel-8-tutorial-for-beginners-step-by-step-1i30

Reunir laobrabrabra coas migracions ''sol'' de nova obra



Logo empregar scaffold interface

https://github.com/amranidev/scaffold-interface-docs/tree/master/getting_started

``composer require amranidev/scaffold-interface:*``

Installation
Run the following command:
composer require amranidev/scaffold-interface

Add the service providers to config/app.php:
Amranidev\ScaffoldInterface\ScaffoldInterfaceServiceProvider::class,
Amranidev\Ajaxis\AjaxisServiceProvider::class,
Spatie\Permission\PermissionServiceProvider::class,
Pusher\Laravel\PusherServiceProvider::class,
Publish the assets in your application with:
php artisan vendor:publish

Run migrations:
php artisan migrate

Authentication scaffolding:
php artisan make:auth

Add HasRole dependency to app/User.php:
```php
<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
}
```


https://www.mywebtuts.com/blog/laravel-livewire-fullcalendar-integration-example

https://www.sistekperu.com/blog/aprende-a-usar-procedimientos-almacenados-en-laravel

Plugins:

- Laravel Generator - IntelliJ IDEs Plugin | Marketplace (jetbrains.com)



Laravel Best Practices

- ref: Crear un panel de administración:
    - https://blog.devgenius.io/laravel-create-an-admin-panel-from-scratch-part-1-installation-8c11dae7e684




https://javiergutierrez.trade/crud-con-jetstream-y-twailwind-laravel-8-inertia/#paso-6-crear-rutas-y-protegerlas-con-laravel-sanctum


https://codepen.io/tippingpointdev/pen/QWMvwKx   toltips!!!css



Configuración antes de la subida
Para comenzar, debemos dirigirnos a nuestro archivo .env y modificaremos estas dos variables:

APP_ENV=production
APP_DEBUG=false
En el caso que estemos utilizando webpack mix, debemos ejecutar en la consola, en la raiz de nuestro proyecto en siguiente comando:

npm run production
una vez hecho esto ejecutaremos también:

composer dumpautoload
Tras esto, estamos listos para comenzar con la subida de nuestra aplicación.

---

# Install livewire

``composer require livewire/livewire``
Include the JavaScript (on every page that will be using Livewire).

resources/views/layouts/app.blade.php

```php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        @livewireScripts
    </body>
</html>```


You can install dependencies

npm install && npm run dev