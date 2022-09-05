<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Concello de Vigo') }}</title>

    <!-- favicon.io -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- evitar vite -->
{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="font-sans antialiased bg-gray-100">
<div id="page-container">
    @include('layouts.navigation')
<!-- Page Heading -->
    <header>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
    <!-- Page Content -->
    <main class="h-96">
        {{ $slot }}
    </main>
</div>

@include('components.footer')

<!-- Livewire Scripts -->
@livewireScripts

<!-- script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script -->
<script src="{{ asset('vendor/flowbite/flowbite.js') }}" defer></script>
</body>
</html>
