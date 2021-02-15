<div class="flex flex-col space-y-4">
        
    <div class="flex justify-between items-center">
        <x-regheader>Klussers</x-regheader>
        <p wire:click="$toggle('new')" class="text-orange-100">{!! file_get_contents('icons/plus.svg') !!}</p>
    </div>

    <div class="flex flex-col space-y-2">

        @each('inc.admin.employees', $job->employees, 'employee', 'inc.admin.no-employees')

        @if ($new)
            
            <select wire:model="newEmployee" class="border border-gray-400 bg-gray-200 rounded w-11/12">
                
                <option value="">Selecteer een klusser</option>
                
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            
            </select>
        
        @endif

    </div>

</div>
