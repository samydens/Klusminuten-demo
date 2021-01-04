<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased bg-gray-100 font-bold font-ubuntu text-orange-100 text-xl">
        <div class="w-80 mx-auto mt-40">
            <img src="/storage/logo/klusmin.png" alt="logo" class="mb-8">
            <div class="mt-3 items-center justify-between flex bg-white relative rounded-xl p-4 shadow">
                <p>inloggen</p>
                <div class="flex items-center">
                    <a href="/login">
                        <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3">
                            {!! file_get_contents('icons/next.svg') !!}
                        </div>
                    </a>
                </div>
            </div>
            <div class="mt-3 items-center justify-between flex bg-white relative rounded-xl p-4 shadow">
                <p>registreren</p>
                <div class="flex items-center">
                    <a href="/register">
                        <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3">
                            {!! file_get_contents('icons/next.svg') !!}
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @livewireScripts
    </body>
</html>