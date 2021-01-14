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
    <body class="antialiased bg-gray-100 font-roboto text-gray-500">
        {{-- Header --}}
        <div class="bg-gradient-to-tr from-orange-100 to-orange-200 h-1/5 w-full fixed top-0">
            {{-- View title --}}
            <p class="font-ubuntu text-2xl text-white font-bold container mx-8 mt-8">@yield('title')</p>
        </div>

        {{-- View content --}}
        {{-- <div class="container w-80 mx-auto mt-36 font-roboto text-gray-500 mb-40">
            @yield('content')
        </div> --}}
        <div class="container mt-24 mb-40 mx-auto">
            @yield('content')
        </div>

        @include('klusminuten.inc.nav')    
        @livewireScripts
    </body>
</html>