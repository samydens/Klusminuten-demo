@extends('layouts.main')

@section('title')
    <div class="w-screen flex p-4" style="margin-top: -1rem;">
        {{-- Return icon --}}
        <a class="absolute" href="/klusvijver"><svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21v-2z"/></svg></a>
        {{-- View title --}}
        <p class="font-ubuntu font-bold text-2xl text-white mx-auto">Klus archief</p>
    </div>
@endsection

@section('content')
    <livewire:archive>
@endsection