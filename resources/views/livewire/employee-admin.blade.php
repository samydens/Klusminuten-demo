<div>

    {{-- Include search bar. --}}
    @include('livewire.admin-inc.search')
    
    <x-admin-message />

    {{-- Loop trough all employees. --}}
    <div class="flex flex-col space-y-2 text-gray-500">
        @each('livewire.admin-inc.klusser', $employees, 'employee', 'livewire.admin-inc.no-results')
    </div>

</div>
