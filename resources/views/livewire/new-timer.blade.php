@section('header')
    <div class="w-screen flex p-4">
        <a class="absolute" href="/home"><svg class="fill-current text-orange-100" xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21v-2z"/></svg></a>
        <p class="font-ubuntu font-bold text-2xl text-orange-100 mx-auto">stopwatch</p>
    </div>
@endsection
<div>
    <div class="w-full text-center flex flex-col mt-36 font-roboto space-y-12">
        <div class="w-56 h-56 rounded-full flex flex-col self-center place-content-center border-4 border-orange-100 shadow">
            {{-- If currentId is not NULL, display current timer. Else, display 0 minutes passed. --}}
            @if (!empty($recordId))
                @if ($editMode and !$running)
                    <input wire:model="total" type="number" class="font-bold text-3xl w-12">
                @else
                    <p wire:poll.50000ms class="font-bold text-3xl">{{$this->getCurrentMin()}}</p>
                @endif
                
                <p class="text-gray-300">minuten <br /> (huidige sessie)</p>
            @else
                <p class="font-bold text-3xl">0</p>
                <p class="text-gray-300">minuten <br /> (huidige sessie)</p>
            @endif
        </div>
        <div>
            <p class="font-bold text-2xl">{{$this->getTotalMin()}}</p>
            <p class="text-gray-300">minuten (totaal)</p>
        </div>
        {{-- If currentId = NULL, display play button. Else display pause button --}}
        @if ($running)
            <svg wire:click="pauseTimer"  class="fill-current text-orange-100 mx-auto" xmlns="http://www.w3.org/2000/svg" height="60" viewBox="0 0 24 24" width="60"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
        @else
            <svg wire:click="startTimer" class="fill-current text-orange-100 mx-auto" xmlns="http://www.w3.org/2000/svg" height="60" viewBox="0 0 24 24" width="60"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>
        @endif
    </div>

    <div class="absolute bottom-4 right-4 left-4 flex space-x-4 font-roboto">
        @if ($editMode)
            <button wire:click="submitEdit" class="flex-grow p-4 bg-orange-100 text-white font-medium rounded shadow text-center">Bevestig</button>
        @else
            @if ($recordId != NULL)
                @if (!$running)
                    <button wire:click="editMode" class="flex-grow p-4 bg-orange-100 text-white font-medium rounded shadow text-center">Bewerken</button>
                @endif
            @endif
            <button wire:click="submitTimer" class="flex-grow p-4 bg-orange-100 text-white font-medium rounded shadow text-center">Bevestig</button>
        @endif
    </div>
</div>
