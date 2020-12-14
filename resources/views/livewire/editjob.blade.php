<div>
    <form wire:submit.prevent="save">
        {{-- Job card --}}
        <div class="bg-white rounded shadow p-4 rounded-xl flex flex-row font-roboto mb-4">
            <img class="rounded-xl h-52 w-52" src="/img/bathroom.jpg" alt="bathroom">
            <div class="w-full px-8 space-y-4">
                <div class="flex flex-row justify-between w-full items-center">
                    {{-- Title --}}
                    <input wire:model="title" type="text" class="text-2xl font-ubuntu font-bold text-gray-500">
                    {{-- Date --}}
                    <p class="text-gray-300 text-sm"> {{ $job->created_at->format('d-m-y') }} </p>
                </div>
                {{-- Budget --}}
                <div>
                    <p class="text-gray-300 text-sm">Afgesproken materiaalkosten</p>
                    <input wire:model="agr_material" type="text">
                </div>
                {{-- Minutes --}}
                <div>
                    <p class="text-gray-300 text-sm">Afgesproken minuten</p>
                    <input wire:model="agr_minutes">
                </div>
                {{-- Status --}}
                <div>
                    <p class="text-gray-300 text-sm">Status</p>
                    <select class="border-b-2 border-orange-100" wire:model="status" id="status">
                        <option value="5" selected="selected">Alle statussen</option>
                        <option value="0">Nog niet begonnen</option>
                        <option value="1">In uitvoering</option>
                        <option value="2">Afgerond</option>
                        <option value="3">Factuur verzonden</option>
                        <option value="4">Factuur betaald</option>
                    </select>
                </div>
            </div>
        </div>
        <button>
            <a href="/klusadmin/{{ $job->id }}" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 rounded-xl text-white">Bewerken</a>
        </button>
    </form>
</div>