{{-- Job details --}}
<div class="bg-white rounded-xl shadow p-4 mx-4 text-gray-500">
                    
    {{-- Form title --}}
    <p class="font-ubuntu font-bold text-xl">Klus</p>
    
    {{-- Step count --}}
    <p class="text-gray-300">Stap {{$step + 1}}</p>
    
    {{-- Job title --}}
    <div class="mt-8">
        <label for="title" class="text-sm text-gray-300">titel:<br></label>
        <input wire:model.lazy="job.title" type="text" id="title" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="typ hier de titel">
        @error('job.title') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>
    
    {{-- Job description --}}
    <div class="mt-4">
        <label for="desc" class="text-sm text-gray-300">beschrijving:<br></label>
        <textarea wire:model.lazy="job.desc" id="desc" cols="30" rows="5" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="typ hier de beschrijving"></textarea>
        @error('job.desc') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>
    
    {{-- Image upload --}}
    <div class="mt-4">
        <label class="w-full flex flex-col items-center border border-gray-400 rounded py-2 bg-gray-200 text-gray-300">
            <svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
            </svg>
            <span class="mt-1">Kies een afbeelding</span>
            <span class="text-xs">(optioneel)</span>
            <input wire:model="photo" type="file" class="hidden">
        </label>
        @error('photo') <span class="text-sm text-red">{{$message}}</span> @enderror
        
        {{-- Temporary image display --}}
        @if ($photo)
        <div class="mt-4">
            <span class="text-gray-300 text-sm">Afbeelding:</span>
            <img src="{{ $photo->temporaryUrl() }}" class="max-h-48 mx-auto">
        </div>
        @endif
    </div>
    
    {{-- Next button --}}
    <div class="mt-8">
        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Volgende</button>
    </div>
</div>