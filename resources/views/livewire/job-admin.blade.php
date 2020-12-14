<div class="flex flex-row justify-between">
    <div class="w-4/5 m-4 space-y-4">
        @if (!empty($jobs))    
            @foreach ($jobs as $job)    
                {{-- Job card --}}
                <div class="bg-white rounded shadow p-4 rounded-xl flex flex-row font-roboto">
                    <img class="rounded-xl h-52 w-52" src="img/bathroom.jpg" alt="bathroom">
                    <div class="w-full px-8 space-y-4">
                        <div class="flex flex-row justify-between w-full items-center">
                            {{-- Title --}}
                            <p class="text-2xl font-ubuntu font-bold text-gray-500">{{ $job->title }}</p>
                            {{-- Date --}}
                            <p class="text-gray-300 text-sm"> {{ $job->created_at->format('d-m-y') }} </p>
                        </div>
                        {{-- Budget --}}
                        <div>
                            <p class="text-gray-300 text-sm">Afgesproken materiaalkosten</p>
                            <p>€{{ $job->agr_material }}</p>
                        </div>
                        {{-- Minutes --}}
                        <div>
                            <p class="text-gray-300 text-sm">Afgesproken minuten</p>
                            <p>{{ $job->agr_minutes }} minuten</p>
                        </div>
                        {{-- Status --}}
                        <div>
                            <p class="text-gray-300 text-sm">Status</p>
                            <p class="text-orange-100">{{ $statuses[$job->status] }}</p>
                        </div>
                        {{-- Edit button --}}
                        <div>
                            <a href="/klusadmin/{{ $job->id }}" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 rounded-xl text-white">Bewerken</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
        Geen klussen gevonden
        @endif
    </div>
    {{-- Filter --}}
    <div class="bg-white rounded-xl shadow w-1/5 h-60 m-4 p-4">
        <p class="text-2xl font-ubuntu font-bold text-gray-500">Filter</p>
        <div class="flex flex-col mt-4">
            <label class="text-gray-300 text-xs" for="status">Status</label>
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
