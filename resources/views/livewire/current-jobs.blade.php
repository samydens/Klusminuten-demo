<div class="space-y-4">
    {{-- Display messages --}}
    @if (session()->has('message'))
        <div class="relative bg-white text-orange-100 rounded-xl shadow p-4">{{session('message')}}</div>
    @endif
    @foreach ($this->getActiveJobs() as $job)
        {{-- Project card --}}
        <div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
            {{-- Project image --}}
            <div class="rounded-xl w-full h-36 bg-center bg-cover" style="background-image: url('/img/bathroom.jpg')"></div>
            {{-- Project title --}}
            <div class="my-4">
                <p class="text-xs">Huidige project</p>
                <p class="font-medium text-xl text-gray-500">{{$job->title}}</p>
            </div>
            {{-- Project stats --}}
            <div class="flex space-x-4 text-center">
                <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                    <p class="text-xs">Minuten</p>
                    <p class="font-medium text-gray-500">{{$job->agr_minutes}}</p>
                </div>
                <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                    <p class="text-xs">Materiaal</p>
                    <p class="font-medium text-gray-500">€ {{$job->agr_material}}</p>
                </div>
                <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                    <p class="text-xs">Locatie</p>
                    <p class="font-medium text-gray-500">{{$job->location}}</p>
                </div>
            </div>
            <div class="my-6 items-center justify-between flex text-gray-500">
                {{-- title --}}
                <p class="font-medium text-xl text-kmtitel">Minuten</p>
                {{-- button & minutes --}}
                <div class="flex items-center">
                    <p class="text-xs mr-4 text-gray-300">{{$this->getMin($job->id)}} min</p>
                    <a href="/stopwatch/{{$job->id}}">
                        <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3">
                            @if ($this->checkActive($job->id))
                                <svg class="fill-current text-orange-100" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>
                            @else
                                <svg class="fill-current text-orange-100" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                            @endif
                        </div>
                    </a>
                </div>
            </div>
                {{-- materiaalkosten --}}
            <div class="mt-3 items-center justify-between flex text-gray-500">
                {{-- title --}}
                <p class="font-par font-medium text-xl text-kmtitel">Materiaalkosten</p>
                {{-- button & cost in euro's --}}
                <div class="flex items-center">
                    <p class="text-xs text-gray-300 mr-4">€ {{$this->getMaterialCosts($job->id)}}</p>
                    <a href="/material/{{$job->id}}">
                        <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3">
                            <svg class="fill-current text-orange-100" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/></svg>
                        </div>
                    </a>
                </div>
            </div>
            <div class="mt-6 text-white font-par font-medium font-lg">
                <button wire:click="completeJob({{$job->id}})" class="bg-gradient-to-tr from-orange-100 to-orange-200 rounded-xl shadow p-4 w-full">Project afronden</button>
            </div>
        </div>
    @endforeach
</div>