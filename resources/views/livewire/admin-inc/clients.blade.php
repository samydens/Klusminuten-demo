<div class="flex justify-between items-center">
    <div class="flex items-center">
        <p class="text-orange-100 mr-2">{!! file_get_contents('icons/handyman.svg') !!}</p>
        <p>{{ $client->full_name }}</p>
    </div>
    <p wire:click="detachClient({{ $client->id }})" class="text-orange-100">{!! file_get_contents('icons/min.svg') !!}</p>
</div>