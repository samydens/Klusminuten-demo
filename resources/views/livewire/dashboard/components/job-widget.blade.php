<div class="bg-white rounded-xl shadow flex">

    {{-- image --}}
    <div class="rounded-l-xl bg-center bg-cover w-3/5" style="background-image: url('/storage/{{ $job->photo }}')"></div>

    <div class="w-full p-4">

        {{-- title & location --}}
        <div class="mb-4">
            <x-regheader>{{ $job->title }}</x-regheader>
            <p class="text-gray-300 text-sm">{{ $location }}</p>
        </div>

        {{-- Minutes --}}
        <div class="flex justify-between">

            <div>
                <p class="text-xs text-gray-300">Gekluste minuten</p>
                <p wire:poll.1000ms class="text-orange-100 font-bold">{{ $this->getMinutes() }}</p>
            </div>

            {{-- button with background --}}
            @if ($running)
                <button wire:click="stopTimer" class="bg-gradient-to-tr from-gray-600 to-gray-700 rounded-full w-12 h-12 focus:outline-none text-orange-100 flex justify-center items-center">
                    <div>{!! file_get_contents('icons/pause.svg') !!}</div>
                </button>
            @else
                <button wire:click="startTimer" class="bg-gradient-to-tr from-gray-600 to-gray-700 rounded-full w-12 h-12 focus:outline-none text-orange-100 flex justify-center items-center">
                    <div>{!! file_get_contents('icons/play.svg') !!}</div>
                </button>
            @endif
        
        </div>
        
        {{-- More link --}}
        <a href="/active/{{ $job->id }}" class="font-bold text-orange-100 text-sm float-right mt-4"><u>Meer info</u></a>
    
    </div>
</div> 
