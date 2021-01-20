<div>
    <x-regheader>
        Klant
    </x-regheader>

    <div class="flex justify-between items-center mt-8">
        <div class="flex items-center">
            <p class="text-orange-100 mr-2">{!! file_get_contents('icons/person.svg') !!}</p> 
            <p>{{ $client->full_name }}</p> 
        </div>
        <p class="text-orange-100">{!! file_get_contents('icons/edit.svg') !!}</p>
    </div>
</div>
