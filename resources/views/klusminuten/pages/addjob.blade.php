@extends('klusminuten.layout.app')

@section('title')
    Klus toevoegen
@endsection

@section('content')
<div class="flex flex-col space-y-4 mb-40">
    @livewire('add-job')
    @livewire('add-client')
    @livewire('add-employee')
</div>
@endsection