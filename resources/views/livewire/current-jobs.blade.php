@section('title')
    Dashboard
@endsection
<div class="space-y-4 relative">
    {{-- Display messages --}}
    @if (session()->has('message'))
        <x-message>
            {{ session('message') }}
        </x-message>
    @endif
    @can('edit jobs')
        <x-widget>
            <div class="flex items-center justify-between">
                <p class="text-xl font-medium">Bewerk klussen</p>
                <div class="flex items-center">
                    <a href="/admin/klus">
                        <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3">
                            {!! file_get_contents('icons/next.svg') !!}
                        </div>
                    </a>
                </div>
            </div>
        </x-widget>
    @endcan 
    @can('edit users')
        <x-widget>
            <div class="flex items-center justify-between">
                <p class="text-xl font-medium">Bewerk gebruikers</p>
                <div class="flex items-center">
                    <a href="/admin/user">
                        <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3">
                            {!! file_get_contents('icons/next.svg') !!}
                        </div>
                    </a>
                </div>
            </div>
        </x-widget>
    @endcan
    @if ($activeJobs->isEmpty())
            {{-- Message for when the archive is empty --}}
            <p class="w-full text-center mt-56 text-gray-300 text-xl">Geen active klussen <br /> :(</p>
        @endif
    @foreach ($this->activeJobs as $job)
        <x-widget>
            
            {{-- Project image --}}
            <div class="rounded-xl w-full h-36 bg-center bg-cover" style="background-image: url('/storage/{{ $job->photo }}')"></div>
            
            {{-- Project title --}}
            <div class="my-4">
                <p class="text-xs text-gray-300">Huidige project</p>
                <p class="font-medium text-xl">{{$job->title}}</p>
            </div>
            
            {{-- Project stats --}}
            <div class="flex space-x-4 text-center">
                <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                    <p class="text-xs text-gray-300">Minuten</p>
                    <p class="font-medium">{{$job->agr_minutes}}</p>
                </div>
                <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                    <p class="text-xs text-gray-300">Materiaal</p>
                    <p class="font-medium">€ {{$job->agr_material}}</p>
                </div>
                <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                    <p class="text-xs text-gray-300">Locatie</p>
                    <p class="font-medium">{{$job->location}}</p>
                </div>
            </div>
            <div class="my-6 items-center justify-between flex">
                
                {{-- title --}}
                <p class="font-medium text-xl">Minuten</p>
                
                {{-- button & minutes --}}
                <div class="flex items-center">
                    <p class="text-xs mr-4 text-gray-300">{{$this->getMin($job->id)}} min</p>
                    <a href="/stopwatch/{{$job->id}}">
                        <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3">
                            {!! file_get_contents('icons/next.svg') !!}
                        </div>
                    </a>
                </div>
            </div>
            
            {{-- materiaalkosten --}}
            <div class="mt-3 items-center justify-between flex">
                
                {{-- title --}}
                <p class="font-medium text-xl">Materiaalkosten</p>
                
                {{-- button & cost in euro's --}}
                <div class="flex items-center">
                    <p class="text-xs text-gray-300 mr-4">€ {{$this->getMaterialCosts($job->id)}}</p>
                    <a href="/materiaal/{{$job->id}}">
                        <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3 text-orange-100">
                            {!! file_get_contents('icons/plus.svg') !!}
                        </div>
                    </a>
                </div>
            </div>
            <div class="mt-6 text-white font-medium font-lg">
                <button wire:click="completeJob({{$job->id}})" class="bg-gradient-to-tr from-orange-100 to-orange-200 rounded-xl shadow p-4 w-full">Project afronden</button>
            </div>
        </x-widget>
    @endforeach
</div>
