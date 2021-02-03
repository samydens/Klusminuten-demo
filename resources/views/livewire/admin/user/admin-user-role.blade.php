<div class="flex flex-col space-y-4">
        
    <div class="flex justify-between items-center">
        <x-regheader>Rollen</x-regheader>
        <p wire:click="$set('newRole', 'True')" class="text-orange-100">{!! file_get_contents('icons/plus.svg') !!}</p>
    </div>

    <div class="flex flex-col space-y-2">
        
        @foreach ($user->roles as $role)
            <div class="flex flex-row justify-between items-center">
                <div class="flex flex-row items-center">
                    <p class="text-orange-100 mr-2">{!! file_get_contents('icons/person.svg') !!}</p>
                    <p>{{ $role->name }}</p>
                </div>
                <button wire:click="removeRole({{ $role->id }})" class="text-orange-100 focus:outline-none">{!! file_get_contents('icons/min.svg') !!}</button>
            </div>
        @endforeach

        @if ($newRole)
            <form wire:submit.prevent="submit" class="flex items-center justify-between">
                <select wire:model="newRoleId" class="border border-gray-400 bg-gray-200 rounded w-11/12">
                    <option value="">Selecteer een rol</option>
                    @foreach ($allRoles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                <button type="submit" class="text-orange-100 focus:outline-none">{!! file_get_contents('icons/save.svg') !!}</button>
            </form>
        @endif
    
    </div>

</div>
