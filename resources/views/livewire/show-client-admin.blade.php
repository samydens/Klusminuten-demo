@section('title')
    Klant bewerken
@endsection

@section('link')
    <a href="/admin?slide=2" class="text-orange-100">{!! file_get_contents('icons/exit.svg') !!}</a>
@endsection

<div class="mx-4 flex flex-col space-y-16">

    <livewire:admin-client-details :clientId="$clientId" />

    <livewire:admin-client-jobs :clientId="$clientId" />

    <livewire:admin-client-delete :clientId="$clientId" />

    {{-- White space --}}
    <div class="bg-white w-full h-52"></div>
</div>
