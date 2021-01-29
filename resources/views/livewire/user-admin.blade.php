<div>
    
    {{-- Include searchbar. --}}
    @include('livewire.admin-inc.search')

    
    {{-- Loop trough all users --}}
    <div class="flex flex-col space-y-2 text-gray-500">
        <x-admin-message />
        @each('livewire.admin-inc.gebruiker', $users, 'user', 'livewire.admin-inc.no-results')
    </div>
</div>
