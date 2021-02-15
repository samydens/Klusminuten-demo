<div class="flex justify-between items-center">
    <div class="flex items-center">
        <p class="text-orange-100 mr-2">{!! file_get_contents('icons/admin.svg') !!}</p>
        <p>{{ $user->name }}</p>
    </div>
    <p wire:click="detachUser({{$user->id}})" class="text-orange-100">{!! file_get_contents('icons/min.svg') !!}</p>
</div>