@extends('klusminuten.layout.app')

@section('title')
    Dashboard
@endsection


@section('content')
    <livewire:link :link="/admin/klus" :title="Bewerk klussen"> 
    <livewire:current-jobs>
@endsection