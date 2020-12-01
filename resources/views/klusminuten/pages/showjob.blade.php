@extends('klusminuten.layout.app')

@section('title')
    <a class="text-white font-bold font-xl" href="/pool"><svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21v-2z"/></svg></a>
@endsection

@section('content')
<div class="space-y-4">
    {{-- Project card --}}
    <div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
        {{-- Project image --}}
        <div class="rounded-xl w-full h-36 bg-center bg-cover" style="background-image: url('/img/bathroom.jpg')"></div>
        {{-- Project title --}}
        <div class="my-4">
            <p class="text-xs">Huidige project</p>
            <p class="font-medium text-xl text-gray-500">Badkamer installeren</p>
        </div>
        {{-- Project stats --}}
        <div class="flex space-x-4 text-center">
            <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                <p class="text-xs">Minuten</p>
                <p class="font-medium text-gray-500">2400</p>
            </div>
            <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                <p class="text-xs">Materiaal</p>
                <p class="font-medium text-gray-500">12.000</p>
            </div>
            <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                <p class="text-xs">Locatie</p>
                <p class="font-medium text-gray-500">Harderwijk</p>
            </div>
        </div>
    </div>
    <div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
        <p class="font-medium text-gray-500">Omschrijving</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Phasellus eget odio sodales, interdum sem tempus, 
            pretium augue. Nam aliquam, mauris sed egestas 
            vulputate, nisi risus laoreet massa, sed malesuada nulla 
            neque in mi. Morbi ante justo, ullamcorper sed sem ac, 
            commodo volutpat enim. Nulla id elit sed urna fringilla 
            ornare. Curabitur ac turpis nunc.</p>
    </div>
    <div class="mt-3 text-white font-par font-medium font-lg">
        <button class="bg-gradient-to-tr from-orange-100 to-orange-200 rounded-xl shadow p-4 w-full">Klus starten</button>
    </div>  
</div>
@endsection