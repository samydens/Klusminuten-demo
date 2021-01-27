<div class="flex flex-col space-y-4">
        
    {{-- Header --}}
    <div class="flex justify-between items-center">
        <x-regheader>Klanten:</x-regheader>
        <p wire:click="$set('newClient', 'True')" class="text-orange-100">{!! file_get_contents('icons/plus.svg') !!}</p>
    </div>

    {{-- Foreach with employees --}}
    <div class="flex flex-col space-y-2">
        @each('livewire.admin-inc.clients', $clients, 'client', 'livewire.admin-inc.no-clients')

        {{-- If user clicked on '+' then show form where user can attach new employee to job --}}
        @if ($newClient)
            <form wire:submit.prevent="submit" class="flex items-center justify-between">
                <select wire:model="newClientId" class="border border-gray-400 bg-gray-200 rounded w-11/12">
                    <option value="">Selecteer een klusser</option>
                    @each('livewire.admin-inc.client-option', $allClients, 'client', 'livewire.admin-inc.no-employee-option')
                </select>
                <button type="submit" class="text-orange-100 focus:outline-none">{!! file_get_contents('icons/save.svg') !!}</button>
            </form>
        @endif
    </div>

</div>
