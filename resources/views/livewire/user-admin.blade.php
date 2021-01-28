<div>
    
    {{-- Include searchbar. --}}
    @include('livewire.admin-inc.search')

    {{-- Display session messages. --}}
    @if (session()->has('message'))
        <x-message>
            {{ session('message') }}
        </x-message>
    @endif

    {{-- Loop trough all users --}}
    @each('livewire.admin-inc.user', $users, 'user', 'livewire.admin-inc.empty')
</div>
