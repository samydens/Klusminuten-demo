@extends('klusminuten.layout.app')

@section('title')
    Dashboard
@endsection


@section('content')
<livewire:current-jobs>
        <div class="mt-3">
            {{-- timer --}}
            <div class="rounded-xl bg-white items-center justify-between shadow flex p-3 pl-8">
                {{-- title --}}
                <p class="font-medium text-xl text-kmtitel">Minuten</p>
                {{-- button & minutes --}}
                <div class="flex items-center">
                    <p class="text-xs mr-4 text-gray-300">44 min</p>
                    <a href="/timer">
                        <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3">
                            <svg class="fill-current text-orange-100" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                        </div>
                    </a>
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
                    <a href="/material">
                        <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3">
                            <svg class="fill-current text-orange-100" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-3 text-white font-par font-medium font-lg">
            <button class="bg-gradient-to-tr from-orange-100 to-orange-200 rounded-xl shadow p-4 w-full">Project afronden</button>
        </div>
@endsection