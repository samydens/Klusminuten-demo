@extends('klusminuten.layout.timer')

@section('header')
    <div class="w-screen flex p-4">
        <a class="absolute" href="/home"><svg class="fill-current text-orange-100" xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21v-2z"/></svg></a>
        <p class="font-ubuntu font-bold text-2xl text-orange-100 mx-auto">Materiaalkosten</p>
    </div>
@endsection

@section('content')
    <form class="flex flex-col mt-20 w-11/12 mx-auto space-y-4" action="">
        <label class="text-xs text-gray-300">Naam<input type="text" class="border border-gray-400 bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        <label class="text-xs text-gray-300">Bedrag<input type="text" class="border border-gray-400 bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        <label class="text-xs text-gray-300">Omschrijving<textarea class="border border-gray-400 bg-gray-200 rounded w-full h-27 py-1 px-4"></textarea></label>
        <button class="p-4 w-full bg-gradient-to-tr from-orange-100 to-orange-200 rounded shadow font-medium text-white">Kosten toevoegen</button>
    </form>
@endsection