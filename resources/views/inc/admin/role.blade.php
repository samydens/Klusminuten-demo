<div class="flex flex-row justify-between items-center">
    <div class="flex flex-row items-center">
        <p class="text-orange-100 mr-2">{!! file_get_contents('icons/person.svg') !!}</p>
        <p>{{ $role->name }}</p>
    </div>
    <button wire:click="removeRole({{ $role->id }})" class="text-orange-100 focus:outline-none">{!! file_get_contents('icons/min.svg') !!}</button>
</div>