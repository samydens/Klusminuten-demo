<div class="flex flex-row justify-between">
    <div class="w-4/5 m-4 space-y-4">
        {{-- Display messages --}}
        @if (session()->has('message'))
            <div class="relative bg-white text-orange-100 rounded-xl shadow p-4">{{session('message')}}</div>
        @endif   
        @foreach ($jobs as $job)    
            {{-- Job card --}}
            <div class="bg-white rounded shadow p-4 rounded-xl flex flex-row font-roboto">
                <div class="rounded-xl w-80 bg-cover" style="background-image: url('/img/bathroom.jpg')"></div>
                <div class="w-full px-8 space-y-4">
                    <div class="flex flex-row justify-between w-full items-center">
                        {{-- Title --}}
                        <p class="text-2xl font-ubuntu font-bold text-gray-500">{{ $job->title }}</p>
                        {{-- Date --}}
                        <p class="text-gray-300 text-sm"> {{ $job->created_at->format('d-m-y') }} </p>
                    </div>
                    {{-- Budget --}}
                    <div>
                        <p class="text-gray-300 text-sm">Huidig / afgesproken</p>
                        <p>{{'€'.$this->totalMaterial($job->id).' / €'.$job->agr_material }}</p>
                    </div>
                    {{-- Minutes --}}
                    <div>
                        <p class="text-gray-300 text-sm">Huidig / afgesproken</p>
                        <p>{{ $this->totalMinutes($job->id).' / '.$job->agr_minutes.' minuten' }}</p>
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
