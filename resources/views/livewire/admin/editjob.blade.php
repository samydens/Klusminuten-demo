<div class="hidden lg:flex xl:flex 2xl:flex bg-white rounded-xl shadow p-4 m-4 flex-row space-x-4">
    <div class="rounded-l-xl bg-center bg-cover bg-no-repeat -my-4 -ml-4 w-48" style="background-image: url('/storage/{{$job->photo}}')"></div>
    <div class="w-full">
        <div class="flex justify-between items-center">
            <input wire:model="job.title" class="font-ubuntu font-bold text-xl text-gray-500">
            <p class="text-xs text-gray-300">{{$job->created_at->format('d-m-y')}}</p>
        </div>
        <div class="flex flex-row justify-between">
            <div class="flex flex-row space-x-8">
                <div class="text-gray-300">
                    <input wire:model="job.minutes">
                    <input wire:model="job.material">
                    <select wire:model="job.status">
                        <option value="0">Nog niet begonnen</option>
                        <option value="1">In uitvoering</option>
                        <option value="2">Afgerond</option>
                        <option value="3">Factuur verzonden</option>
                        <option value="4">Factuur betaald</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
