<div class="lg:flex lg:flex-row-reverse font-roboto">
    <div class="bg-white rounded-xl shadow p-4 m-4 space-y-4 lg:w-1/5 lg:h-44">
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
    <div class="lg:w-4/5">
        @if (session()->has('message'))
            <div class="relative bg-white text-orange-100 rounded-xl shadow p-4">{{session('message')}}</div>
        @endif  
        @foreach ($jobs as $job)
            <livewire:editjob :job="$job" :key="$job->id">
        @endforeach
    </div>
</div>
