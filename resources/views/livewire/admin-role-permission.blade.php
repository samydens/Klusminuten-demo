<div class="flex flex-col space-y-4 mt-16">

    {{-- header --}}
    <div class="flex justify-between items-center">
        <x-regheader>Permissies</x-regheader>
        <p wire:click="$toggle('newPermission')" class="text-orange-100 cursor-pointer">{!! file_get_contents('icons/plus.svg') !!}</p>
    </div>

    <div class="flex flex-col space-y-2">
        @each('livewire.admin-inc.permissions', $permissions, 'permission', 'livewire.admin-inc.empty')
        
        {{-- If user clicked on '+' the show form where user can attach new permissions to role --}}
        @if ($newPermission)
        <form wire:submit.prevent="submit" class="flex items-center justify-between">
            <select wire:model="newPermissionId" class="border border-gray-400 bg-gray-200 rounded w-11/12">
                <option value="">Selecteer een permissie</option>
                @each('livewire.admin-inc.permission-option', $allPermissions, 'permission', 'livewire.admin-inc.empty')
            </select>
            <button type="submit" class="text-orange-100 focus:outline-none">{!! file_get_contents('icons/save.svg') !!}</button>
        </form>
        @endif
    </div>
</div>
