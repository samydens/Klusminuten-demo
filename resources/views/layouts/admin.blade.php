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
        
        @yield('content')

        {{-- Header --}}
        {{-- <nav class="bg-white shadow"> --}}
            
            {{-- Title
            <div class="flex flex-row font-roboto py-8 px-8 text-2xl container mx-auto">
                <p class="text-orange-100 font-bold">Klusminuten</p><p class="text-gray-300">admin</p>
            </div> --}}

            {{-- <div class="flex justify-between text-gray-300">
                <button wire:click="$set('slide', 0)" class="text-center w-full">
                    <p>Klus</p>
                </button>
                <button wire:click="$set('slide', 1)" class="text-center w-full">
                    <p>Klusser</p>
                </button>
                <button wire:click="$set('slide', 2)" class="text-center w-full  {{ $slide == 2 ? 'border-b-2 border-orange-100 text-orange-100' : '' }}">
                    <p>Klant</p>
                </button>
            </div> --}}
            {{-- @yield('nav-links') --}}
            
        {{-- </nav> --}}
        
        {{-- View content
        <div class="container mt-8 mx-auto">
            @yield('content')
        </div>     --}}
        
        @livewireScripts
    </body>
</html>