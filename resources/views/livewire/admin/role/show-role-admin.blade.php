@section('title')
    Rol bewerken
@endsection

@section('link')
    <a href="/admin?slide=4" class="text-orange-100">{!! file_get_contents('icons/exit.svg') !!}</a>
@endsection

<div class="mx-4 flex flex-col space-y-12 mb-8">

    <livewire:admin.role.admin-role-permission :role="$role" />

    <livewire:admin.role.admin-role-users :role="$role" />

</div>