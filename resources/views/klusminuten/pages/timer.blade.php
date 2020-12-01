@extends('klusminuten.layout.timer')

@section('header')
    <div class="w-screen flex p-4">
        <a class="absolute" href="/home"><svg class="fill-current text-orange-100" xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21v-2z"/></svg></a>
        <p class="font-ubuntu font-bold text-2xl text-orange-100 mx-auto">title</p>
    </div>
@endsection

@section('content')
    <div class="w-full text-center flex flex-col mt-36 font-roboto space-y-12">
        <div class="w-52 h-52 rounded-full flex flex-col self-center place-content-center border-4 border-orange-100 shadow">
            <p class="font-bold text-4xl ">543</p>
            <p class="text-gray-300">minuten (totaal)</p>
        </div>
        <div>
            <p class="font-bold text-3xl ">12</p>
            <p class="text-gray-300">minuten (huidige sessie)</p>
        </div>
        <svg class="fill-current text-orange-100 mx-auto" xmlns="http://www.w3.org/2000/svg" height="60" viewBox="0 0 24 24" width="60"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>
    </div>
    <div class="absolute bottom-4 right-4 left-4 flex space-x-4 font-roboto">
        <button class="flex-grow p-4 bg-orange-100 text-white font-medium rounded shadow">bevestig</button>
        <button class="flex-grow p-4 bg-orange-100 text-white font-medium rounded shadow">bewerken</button>
    </div>
@endsection