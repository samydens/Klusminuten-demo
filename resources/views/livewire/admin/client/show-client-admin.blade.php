@section('title')
    Klant bewerken
@endsection

@section('link')
    <a href="/admin?slide=2" class="text-orange-100">{!! file_get_contents('icons/exit.svg') !!}</a>
@endsection

<div class="mx-4 flex flex-col space-y-16">

    <livewire:admin.client.admin-client-details :client="$client" />

    <livewire:admin.client.admin-client-jobs :client="$client" />

    <livewire:admin.client.admin-client-delete :client="$client" />
    
</div>
