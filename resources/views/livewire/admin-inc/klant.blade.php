<x-widget>
    <div class="flex justify-between items-center">
        <p class="font-bold text-xl">{{ $client->full_name }}</p>
        <a href="/admin/client/{{$client->id}}">{!! file_get_contents('icons/edit.svg') !!}</a>
    </div>
</x-widget>