<form wire:submit.prevent="save">
    {{-- Job card --}}
    <div class="bg-white rounded shadow p-4 rounded-xl flex flex-row font-roboto mb-4">
        <div class="rounded-xl w-80 bg-cover" style="background-image: url('/storage/{{ $job->photo }}')"></div>
        <div class="w-full px-8 space-y-4">
            <div class="flex flex-row justify-between w-full items-center">
                {{-- Title --}}
                <input wire:model="title" type="text" class="text-2xl font-ubuntu font-bold text-gray-500">
                {{-- Date --}}
                <p class="text-gray-300 text-sm"> {{ $job->created_at->format('d-m-y') }} </p>
            </div>
            {{-- Budget --}}
            <div>
                <label for="agr_material" class="text-gray-300 text-sm">Afgesproken materiaalkosten</label>
                <div class="flex flex-row">
                    <p>€</p><input wire:model="agr_material" id="agr_material">
                </div>
            </div>
            {{-- Minutes --}}
            <div class="flex flex-col">
                <label for="agr_minutes" class="text-gray-300 text-sm">Afgesproken minuten</label>
                <input wire:model="agr_minutes" id="agr_minutes" class="w-48">
            </div>
            {{-- Status --}}
            <div class="flex flex-col">
                <label for="status" class="text-gray-300 text-sm">Status</label>
                <select class="border-b-2 border-orange-100 w-48" wire:model="status" id="status">
                    <option value="0">Nog niet begonnen</option>
                    <option value="1">In uitvoering</option>
                    <option value="2">Afgerond</option>
                    <option value="3">Factuur verzonden</option>
                    <option value="4">Factuur betaald</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 rounded-xl text-white">
        Opslaan
    </button>
</form>
