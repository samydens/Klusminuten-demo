<div class="flex flex-col space-y-4 mt-16">

    <div class="flex justify-between items-center">
        <x-regheader>Permissies</x-regheader>
        <p wire:click="$toggle('newPermission')" class="text-orange-100 cursor-pointer">{!! file_get_contents('icons/plus.svg') !!}</p>
    </div>

    <div class="flex flex-col space-y-2">
        
        @each('inc.admin.permissions', $role->permissions, 'permission', 'inc.admin.empty')
        
        @if ($newPermission)
            
            <select wire:model="newPermissionId" class="border border-gray-400 bg-gray-200 rounded w-11/12">
                
                <option value="">Selecteer een permissie</option>

                @foreach ($permissions as $permission)
                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                @endforeach

            </select>

        @endif
    
    </div>

</div>
