@section('title')
    Rol bewerken
@endsection

{{-- 'X' button --}}
@section('link')
    <a href="/admin?slide=4" class="text-orange-100">{!! file_get_contents('icons/exit.svg') !!}</a>
@endsection

{{-- All the 'sections' --}}
<div class="mx-4 flex flex-col space-y-12 mb-8">

    {{-- Permissions of role --}}
    <livewire:admin-role-permission :roleId="$roleId" />

    {{-- User that have role --}}
    <livewire:admin-role-users :roleId="$roleId" />

</div>