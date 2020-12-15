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
    <body class="antialiased bg-gray-100 h-screen">
        {{-- Header --}}
        <nav class="bg-white shadow">
            {{-- Title --}}
            <div class="flex flex-row font-roboto py-8 px-8 container mx-auto">
                <p class="text-2xl text-orange-100 font-bold">Klusminuten</p><p class="text-2xl text-gray-300">admin</p>
            </div>
        </nav>
        {{-- View content --}}
        <div class="container mx-auto mt-8">
            @yield('content')
        </div>    
        @livewireScripts
    </body>
</html>