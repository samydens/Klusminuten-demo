@section('title', 'Klusvijver')

<div class="space-y-4">
    
    <x-widget title="Welkom in de Klusvijver">
        <p class="text-gray-300 mb-4">Hier kan je alle klussen bekijken.</p>
        <a href="/archief" class="underline font-medium text-orange-100 ">Bekijk archief</a>
    </x-widget>

    @if (session()->has('message'))
        <x-message>
            {{ session('message') }}
        </x-message>
    @endif
    
    <div class="space-y-2">
        
        @forelse ($jobs as $job)
            <a href="/klusvijver/{{$job->id}}" class="bg-white rounded-xl p-2 shadow text-gray-300 flex items-center space-x-4">  
                <div class="rounded-xl w-20 h-16 bg-center bg-cover" style="background-image: url('/storage/{{ $job->photo }}')"></div>
                <div>
                    <p class="font-bold text-gray-500">{{$job->title}}</p>
                    <p class="text-sm">{{$job->agr_minutes}} min | € {{$job->agr_material}}</p>
                </div>
            </a>
        @empty
            <p class="w-full text-center mt-40 text-gray-300 text-xl">Geen klussen in klusvijver <br /> :(</p>
        @endforelse
    
    </div>

</div>
