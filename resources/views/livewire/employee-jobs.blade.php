<div>
    <form wire:submit.prevent="submit">
        <div class="bg-white rounded-xl shadow p-4 text-gray-500">
            <p class="font-ubuntu font-bold text-xl">Koppel klus en klusser</p>
            <div class="mt-4">
                <label for="job" class="text-gray-300 text-sm">Klus:<br /></label>
                <select wire:model.lazy="selectedJob" id="job" class="bg-gray-200 border border-gray-400 rounded">
                    <option value="">Kies een klus</option>
                    @foreach ($jobs as $job)
                        <option value="{{$job->id}}">{{$job->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <label for="employee" class="text-gray-300 text-sm">Klusser:<br /></label>
                <select wire:model.lazy="selectedEmployee" id="employee" class="bg-gray-200 border border-gray-400 rounded">
                    <option value="">Kies een klusser</option>
                    @foreach ($employees as $employee)
                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 py-2 px-3 text-white rounded-xl">Koppelen</button>
            </div>
        </div>
    </form>

    {{-- <form wire:submit.prevent="deleteRelation">
        @foreach ($jobs as $job)
            <div class="bg-white rounded-xl shadow p-4 mt-4">
                <p class="text-gray-500 font-bold font-ubuntu text-2xl">{{$job->title}}</p>
                @if ($job->employees->isNotEmpty())
                    <p class="text-gray-500 font-bold font-ubuntu text-xl mt-4">Klussers:</p>
                @endif
                <ul class="list-disc text-gray-500">
                    @foreach ($job->employees as $employee)
                            <li class="ml-6">
                                <input type="hidden" value="{{$job->id}}" wire:model="jobId">
                                <input type="hidden" value="{{$employee->id}}" wire:model='employeeId'>
                                <span>{{$employee->name}}</span><button type="submit" class="text-orange-100 text-sm ml-4"><u>verwijderen</u></button>
                            </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </form> --}}
    @foreach ($jobs as $job)
        <div class="bg-white rounded-xl shadow p-4 mt-4">
            <p class="text-gray-500 font-bold font-ubuntu text-2xl">{{$job->title}}</p>
            @if ($job->employees->isNotEmpty())
            <p class="text-gray-500 font-bold font-ubuntu text-xl mt-4">Klussers:</p>
            @endif
            <ul class="list-disc text-gray-500">
                @foreach ($job->employees as $employee)
                    <li>{{$employee->name}} <span wire:click="detachRelation({{ $job->id }}, '{{ $employee->id }}')">verwijder</span></li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>
