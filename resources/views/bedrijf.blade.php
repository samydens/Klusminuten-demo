@extends('layouts.admin')

@section('content')
    <div class="text-gray-500 font-roboto h-screen overflow-y-hidden">
        <div class="bg-white w-100 px-28 py-8 absolute top-0">
            <img src="storage/logo/klusmin.png" alt="Klusminuten logo">
        </div>

        <x-widget title="Bedrijf" class="mx-4 mt-56 text-orange-100">
            <a href="/bedrijf/kies">
                <div class="bg-gradient-to-tr from-orange-100 to-orange-200 rounded w-full py-2 text-white my-4 text-center">Ik ben een werknemer</div>
            </a>
            <a href="/underconstruction">
                <div class="bg-gradient-to-tr from-orange-100 to-orange-200 rounded w-full py-2 text-white text-center">Ik wil een bedrijf aanmelden</div>
            </a>
        </x-widget>

    </div>
@endsection