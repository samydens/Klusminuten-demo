@extends('klusminuten.layout.app')

@section('title')
    Klus toevoegen
@endsection

@section('content')
    <form action="">
        <div class="flex flex-col space-y-4  mb-40">
            <div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
                <p class="font-medium text-xl text-gray-500 text-center mb-4">Klus</p>
                <div class="flex flex-col space-y-4">
                    <label for="job-title">Titel<input id="job-title" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                    <label for="job-number">Klusnummer<input id="job-number" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                    <label for="job-date">Datum<input id="job-date" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                    <label for="job-description">Omschrijving<textarea id="job-description" class="border-gray-400 border bg-gray-200 rounded w-full h-24 py-1 px-4" type="text" placeholder=""></textarea></label>
                </div>
            </div>
            <div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
                <p class="font-medium text-xl text-gray-500 text-center mb-4">Opdrachtgevers</p>
                <div class="flex flex-col space-y-4">
                    <label for="client-name">Naam<input id="client-name" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                    <label for="client-adres">Adres<input id="client-adres" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                    <label for="client-zip">Postcode<input id="client-zip" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                    <label for="client-city">Woonplaats<input id="client-city" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                    <label for="client-phone">Telefoonnummer<input id="client-phone" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                    <label for="client-mail">E-mail<input id="client-mail" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                </div>
            </div>
            <div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
                <p class="font-medium text-xl text-gray-500 text-center mb-4">Vakman team Klusminuten</p>
                <div class="flex flex-col space-y-4">
                    <label for="employee-name">Vakman<input id="employee-name" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                    <label for="employee-id">ID nummer<input id="employee-name" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                    <label for="employee-phone">Telefoonnummer<input id="employee-phone" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                </div>
            </div>
            <div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
                <p class="font-medium text-xl text-gray-500 text-center mb-4">Werk afgesproken</p>
                <div class="flex flex-col space-y-4">
                    <label for="employee-name">Afgesproken minuten<input id="employee-name" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                    <label for="employee-id">Afgesproken materiaal<input id="employee-name" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4" type="text" placeholder=""></label>
                </div>
                <div class="flex">
                    <button class="border-2 border-orange-100 text-orange-100 rounded-full mx-auto w-36 h-9 font-medium mt-8">toevoegen</button>
                </div>
            </div>
        </div>
    </form>
@endsection