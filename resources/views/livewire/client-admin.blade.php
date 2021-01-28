<div>

    {{-- Include search bar --}}
    @include('livewire.admin-inc.search')

    {{-- Display messages --}}
    @if (session()->has('message'))
        <x-message>
            {{ session('message') }}
        </x-message>
    @endif

    
    {{-- Each employee --}}
    @each('livewire.admin-inc.klant', $clients, 'client', 'livewire.admin-inc.empty')

</div>
