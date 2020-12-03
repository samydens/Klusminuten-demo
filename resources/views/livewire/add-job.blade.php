<div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
    <p class="font-medium text-xl text-gray-500 text-center">klus</p>
    <form wire:submit.prevent="submit" class="flex flex-col space-y-4">
        <label>Naam klus<input type="text" wire:model="job.title" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        @error('job.title') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        <label>Omschrijving<textarea type="text" wire:model="job.desc" class="border-gray-400 border bg-gray-200 rounded w-full h-24 py-1 px-4"></textarea></label>
        @error('job.desc') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        <label>Overeengekomen minuten<input type="number" wire:model="job.agr_minutes" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        @error('job.agr_minutes') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        <label>Overeengekomen materiaal<input type="number" wire:model="job.agr_material" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        @error('job.agr_material') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        <div class="flex flex-col space-y-4 text-center">
            <button type="submit" class="border-2 border-orange-100 text-orange-100 rounded-full mx-auto w-36 h-9 font-medium mt-8">opslaan</button>
            @if (session()->has('message'))
                <div class="text-orange-100">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </form>
</div>