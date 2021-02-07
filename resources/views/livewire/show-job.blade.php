@section('title', 'Bekijk klus')

@section('icon')
    <a href="/klusvijver">{!! file_get_contents('icons/exit.svg') !!}</a>
@endsection

<div class="space-y-4">
    <x-widget>

        {{-- Project image --}}
        <div class="rounded-xl w-full h-36 bg-center bg-cover" style="background-image: url('/storage/{{ $job->photo }}')"></div>
        {{-- Project title --}}
        <p class="my-4 font-bold text-xl">{{$job->title}}</p>
        {{-- Project stats --}}
        <div class="flex space-x-4 text-center">
            <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                <p class="text-sm text-gray-300">Minuten</p>
                <p class="font-medium">{{$job->agr_minutes}}</p>
            </div>
            <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                <p class="text-sm text-gray-300">Materiaal</p>
                <p class="font-medium">{{$job->agr_material}}</p>
            </div>
        </div>
        
    </x-widget>


    <x-widget title="Omschrijving">
        <p class="text-gray-300">{!! $job->desc !!}</p>
    </x-widget>

    <x-inputs.button wire:click="setActive({{ $job->id }})" title="Klus uitvoeren" />
</div>
