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
{{-- @vite(['resources/css/app.css', 'resources/js/app.js'])  --}}

<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="font-sans antialiased">
<div class="font-sans text-gray-900 antialiased">
    <div class="bg-blue-400 text-yellow-100 m-0 px-4 py-4 font-light text-2xl leading-none">Servizo de Orientación
        Laboral
    </div>
    {{ $slot }}
    <div class="bottom-0 absolute min-w-full">
        @include('components.footer')
    </div>
</div>

<!-- Livewire Scripts -->
@livewireScripts

<script src="{{ asset('vendor/flowbite/flowbite.js') }}" defer></script>
</body>
</html>
