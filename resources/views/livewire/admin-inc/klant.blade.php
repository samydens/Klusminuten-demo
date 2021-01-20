<x-widget>
    <div class="flex justify-between items-center">
        <p class="font-bold text-xl">{{ $client->full_name }}</p>
        {!! file_get_contents('icons/edit.svg') !!}
    </div>
</x-widget>