{{-- Agreements --}}
<x-widget>

    {{-- Form title --}}
    <p class="font-ubuntu font-bold text-xl">Afspraken</p>
    
    {{-- Step count --}}
    <p class="text-gray-300">Stap {{$step + 1}}</p>
    
    {{-- Agreed minutes --}}
    <div class="mt-8">
        <label for="min" class="text-sm text-gray-300">minuten:<br></label>
        <input wire:model.lazy="job.agr_minutes" id="min" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="afgesproken minuten" type="number">
        @error('job.agr_minutes') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    {{-- Agreed material budget --}}
    <div class="mt-4">
        <label for="material" class="text-sm text-gray-300">materiaalkosten:<br></label>
        <input wire:model.lazy="job.agr_material" id="material" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="afgesproken materiaalkosten" type="number">
        @error('job.agr_material') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    {{-- Next & previous buttons --}}
    <div class="mt-8 flex flex-row space-x-4">
        <button wire:click.prevent="previousStep" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Terug</button>
        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Opslaan</button>
    </div>
</x-widget>