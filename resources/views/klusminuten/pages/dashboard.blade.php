@extends('klusminuten.layout.app')

@section('title')
    Dashboard
@endsection


@section('content')
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
    <div class="mt-3">
        {{-- timer --}}
        <div class="rounded-xl bg-white items-center justify-between shadow flex p-3 pl-8">
            {{-- title --}}
            <p class="font-medium text-xl text-kmtitel">Minuten</p>
            {{-- button & minutes --}}
            <div class="flex items-center">
                <p class="text-xs text-kmparagraph mr-4 text-gray-300">44 min</p>
                <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3">
                    <svg class="fill-current text-orange-100" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3">
        {{-- materiaalkosten --}}
        <div class="rounded-xl bg-white items-center justify-between shadow flex p-3 pl-8">
            {{-- title --}}
            <p class="font-par font-medium text-xl text-kmtitel">Materiaalkosten</p>
            {{-- button & cost in euro's --}}
            <div class="flex items-center">
                <p class="text-xs text-gray-300 mr-4">€ 400</p>
                <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3">
                    <svg class="fill-current text-orange-100" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 text-white font-par font-medium font-lg">
        <button class="bg-gradient-to-tr from-orange-100 to-orange-200 rounded-xl shadow p-4 w-full">Project afronden</button>
    </div>
@endsection