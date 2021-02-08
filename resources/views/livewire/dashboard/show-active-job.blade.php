@section('title', 'Klus Details')

@section('icon')
    <a href="/home">{!! file_get_contents('icons/exit.svg') !!}</a>
@endsection

<div class="space-y-4 relative">
    
    <x-widget>
        <div class="bg-cover bg-center w-full h-48 rounded-xl" style="background-image: url('/storage/{{ $job->photo }}')"></div>

        <div class="mt-4 mb-8">
            <p class="font-bold text-xl">{{ $job->title }}</p>
            <p class="text-gray-300 text-sm">{{ $location }}</p>
        </div>

        <div>
            <x-regheader>Omschrijving</x-regheader>
            <p class="text-gray-300">{{ $job->desc }}</p>
        </div>
    </x-widget>

    @if (isset($job->agr_minutes) && isset($job->agr_material))
        <x-widget title="Afspraken">
            <div class="flex justify-between space-x-4 mt-4">
                
                @if (isset($job->agr_minutes))
                    <div class="bg-gradient-to-tr from-gray-600 to-gray-700 p-2 w-1/2 rounded text-center">
                        <p class="text-gray-300 text-sm">Minuten</p>
                        <x-regheader>{{ $job->agr_minutes }}</x-regheader>
                    </div>
                @endif
                
                @if (isset($job->agr_material))
                    <div class="bg-gradient-to-tr from-gray-600 to-gray-700 p-2 rounded text-center w-1/2">
                        <p class="text-gray-300 text-sm">Materiaalkosten</p>
                        <x-regheader>€ {{ $job->agr_material }}</x-regheader>
                    </div>
                @endif
            </div>
        </x-widget>
    @endif
    <x-inputs.button wire:click="complete" title="Klus Afronden" />
</div>
