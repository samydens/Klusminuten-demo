<div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
    <p class="font-medium text-xl text-gray-500 text-center mb-4">Vakman team Klusminuten</p>
    <form wire:submit.prevent="submit" class="flex flex-col space-y-4">
        <label>Naam vakman<input type="text" wire:model="employee.name" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        @error('employee.name') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        <label>ID<input type="number" wire:model="employee.id" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        @error('employee.id') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        <label>Telefoonnummer<input type="number" wire:model="employee.phone_number" class="border-gray-400 border bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        @error('employee.phone_number') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
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