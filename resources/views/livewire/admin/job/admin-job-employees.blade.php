<div class="flex flex-col space-y-4">
        
    {{-- Header --}}
    <div class="flex justify-between items-center">
        <x-regheader>Klussers</x-regheader>
        <p wire:click="$set('newEmployee', 'True')" class="text-orange-100">{!! file_get_contents('icons/plus.svg') !!}</p>
    </div>

    {{-- Foreach with employees --}}
    <div class="flex flex-col space-y-2">
        @each('livewire.admin-inc.employees', $employees, 'employee', 'livewire.admin-inc.no-employees')

        {{-- If user clicked on '+' then show form where user can attach new employee to job --}}
        @if ($newEmployee)
            <form wire:submit.prevent="submit" class="flex items-center justify-between">
                <select wire:model="newEmployeeId" class="border border-gray-400 bg-gray-200 rounded w-11/12">
                    <option value="">Selecteer een klusser</option>
                    @each('livewire.admin-inc.employee-option', $allEmployees, 'employee', 'livewire.admin-inc.no-employee-option')
                </select>
                <button type="submit" class="text-orange-100 focus:outline-none">{!! file_get_contents('icons/save.svg') !!}</button>
            </form>
        @endif
    </div>

</div>
