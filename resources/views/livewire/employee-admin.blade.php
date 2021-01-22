<div>

    {{-- Include search bar. --}}
    @include('livewire.admin-inc.search')

    {{-- Loop trough all employees. --}}
    @each('livewire.admin-inc.klusser', $employees, 'employee', 'livewire.admin-inc.empty')

</div>
