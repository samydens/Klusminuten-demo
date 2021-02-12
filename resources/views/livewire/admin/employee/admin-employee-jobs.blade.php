<div class="flex flex-col space-y-4">

    <div class="flex justify-between items-center">
        <x-regheader>Klussen</x-regheader>
        <p wire:click="$toggle('newJob')" class="text-orange-100 cursor-pointer">{!! file_get_contents('icons/plus.svg') !!}</p>
    </div>

    <div class="flex flex-col space-y-2">
        
        @each('livewire.admin-inc.jobs', $employee->jobs, 'job', 'livewire.admin-inc.empty')

        @if ($newJob)
       
            <select wire:model="newJobId" class="border border-gray-400 bg-gray-200 rounded w-11/12">
       
                <option value="">Selecteer een klusser</option>
       
                @each('livewire.admin-inc.job-option', $jobs, 'job', 'livewire.admin-inc.no-employee-option')
       
            </select>
 
        @endif
 
    </div>

</div>
