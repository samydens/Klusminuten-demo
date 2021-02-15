<div class="flex flex-col space-y-4">
        
    <div class="flex justify-between items-center">
        <x-regheader>Rollen</x-regheader>
        <p wire:click="$toggle('newRole')" class="text-orange-100">{!! file_get_contents('icons/plus.svg') !!}</p>
    </div>

    <div class="flex flex-col space-y-2">

        @each('inc.admin.role', $user->roles, 'role', 'inc.admin.no-roles')

        @if ($newRole)
            <select wire:model="newRoleId" class="border border-gray-400 bg-gray-200 rounded w-11/12">
                <option value="">Selecteer een rol</option>
                @each('inc.admin.role-option', $roles, 'role')
            </select>
        @endif
    
    </div>

</div>
