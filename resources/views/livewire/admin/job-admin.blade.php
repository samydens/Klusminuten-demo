<div class="lg:flex lg:flex-row-reverse font-roboto">
    <div>
        <div class="flex items-center justify-between text-gray-500 bg-white rounded-xl p-4 m-4 shadow h-24">
            <p class="font-medium text-xl relative">Terug naar home</p>
            <div class="flex items-center">
                <a href="/">
                    <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3">
                        {!! file_get_contents('icons/next.svg') !!}
                    </div>
                </a>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow p-4 m-4 space-y-4 lg:h-28">
            <p class="font-ubuntu font-bold text-xl text-gray-500">Status</p>
            <select wire:model="status" class="border-b-2 border-orange-100 w-full">
                <option value="5">Alle klussen</option>
                <option value="0">Nog niet begonnen</option>
                <option value="1">In uitvoering</option>
                <option value="2">Afgerond</option>
                <option value="3">Factuur verzonden</option>
                <option value="4">Factuur betaald</option>
            </select>
        </div>
    </div>
    <div class="lg:w-4/5">
        @if (session()->has('message'))
            <div class="relative bg-white text-orange-100 rounded-xl shadow p-4">{{session('message')}}</div>
        @endif  
        @foreach ($jobs as $job)
            <livewire:editjob :job="$job" :key="$job->id">
        @endforeach
    </div>
</div>
