<div>

    {{-- Include search bar. --}}
    @include('livewire.admin-inc.search')
    
    {{-- Display messages. --}}
    @if (session()->has('message'))
        <x-message>
            {{ session('message') }}
        </x-message>
    @endif


    {{-- Loop trough all employees. --}}
    @each('livewire.admin-inc.klusser', $employees, 'employee', 'livewire.admin-inc.empty')

</div>
