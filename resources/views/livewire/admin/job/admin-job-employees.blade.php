<div class="flex flex-col space-y-4">
        
    {{-- Header --}}
    <div class="flex justify-between items-center">
        <x-regheader>Klussers</x-regheader>
        <p wire:click="$toggle('new')" class="text-orange-100">{!! file_get_contents('icons/plus.svg') !!}</p>
    </div>

    {{-- Foreach with employees --}}
    <div class="flex flex-col space-y-2">

        @each('livewire.admin-inc.employees', $job->employees, 'employee', 'livewire.admin-inc.no-employees')

        @if ($new)
            <select wire:model="newEmployee" class="border border-gray-400 bg-gray-200 rounded w-11/12">
                <option value="">Selecteer een klusser</option>
                @each('livewire.admin-inc.employee-option', $employees, 'employee', 'livewire.admin-inc.no-employee-option')
            </select>
        @endif

    </div>

</div>
