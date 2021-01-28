<a href="/admin/client/{{ $client->id }}">
    <x-widget>
        <div class="flex justify-between items-center">
            <p class="font-bold text-xl">{{ $client->full_name }}</p>
            {{-- <button wire:click="deleteClient({{ $client->id }})" class="text-orange-100">{!! file_get_contents('icons/delete.svg') !!}</button> --}}
            <p class="text-orange-100">{!! file_get_contents('icons/edit.svg') !!}</p>
        </div>
    </x-widget>
</a>