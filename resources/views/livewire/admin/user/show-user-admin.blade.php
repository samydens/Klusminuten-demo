@section('title')
    User bewerken
@endsection

@section('link')
    <a href="/admin?slide=3" class="text-orange-100">{!! file_get_contents('icons/exit.svg') !!}</a>
@endsection

<div class="mx-4 flex flex-col space-y-12 mb-8">

    <livewire:admin.user.admin-user-details :userId="$userId" />

    <livewire:admin.user.admin-user-role :userId="$userId" />

    <livewire:admin.user.admin-user-companies :userId="$userId" />

</div>
