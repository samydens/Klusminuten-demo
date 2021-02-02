<div>
    

    {{-- Include searchbar --}}
    @include('livewire.admin-inc.search')

    {{-- Loop trough all roles --}}
    <div class="flex flex-col space-y-2 text-gray-500">
        <x-admin-message />
        @each('livewire.admin-inc.rol', $roles, 'role', 'livewire.admin-inc.no-results')
    </div>

</div>
