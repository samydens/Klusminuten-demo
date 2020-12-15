<div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
    {{-- Title --}}
    <p class="font-medium text-xl text-gray-500 text-center">klus</p>
    <form wire:submit.prevent="submit" class="flex flex-col space-y-4" enctype="multipart/form-data">
        {{-- Job name --}}
        <label>Naam klus<input type="text" wire:model.lazy="job.title" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        @error('job.title') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        {{-- Job description --}}
        <label>Omschrijving<textarea type="text" wire:model.lazy="job.desc" class="border-gray-400 border bg-gray-200 rounded w-full h-24 py-1 px-4"></textarea></label>
        @error('job.desc') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        {{-- Job location --}}
        <label>Locatie<input type="text" wire:model.lazy="job.location" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        @error('job.location') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        {{-- Agreed minutes --}}
        <label>Overeengekomen minuten<input type="number" wire:model.lazy="job.agr_minutes" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        @error('job.agr_minutes') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        {{-- Agreed material costs --}}
        <label>Overeengekomen materiaal<input type="number" wire:model.lazy="job.agr_material" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        @error('job.agr_material') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        <label>Foto<input type="file" wire:model="photo" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        @error('photo') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        <div class="flex flex-col space-y-4 text-center">
            {{-- Submit --}}
            <button type="submit" class="border-2 border-orange-100 text-orange-100 rounded-full mx-auto w-36 h-9 font-medium mt-8">opslaan</button>
            {{-- Message --}}
            @if (session()->has('message'))
                <div class="text-orange-100">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </form>
</div>