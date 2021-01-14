<div class="text-gray-500">
    <form wire:submit.prevent="submit">
        <div class="bg-white rounded-xl shadow p-4">
            <p class="font-ubuntu font-bold text-xl">Werknemers aan klussen toevoegen</p>
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
                    <option value="">Kies een werknemer</option>
                    @foreach ($employees as $employee)
                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 py-2 px-3 text-white rounded-xl hover:opacity-50">Koppelen</button>
            </div>
        </div>
    </form>
    @foreach ($jobs as $job)
        <div class="bg-white rounded-xl shadow p-4 mt-4">
            <p class="font-bold font-ubuntu text-2xl">{{$job->title}}</p>
            @if ($job->employees->isNotEmpty())
            <p class="font-bold font-ubuntu text-xl mt-4">Klussers:</p>
            @endif
            <ul class="list-disc ml-6">
                @foreach ($job->employees as $employee)
                    <li>
                        <span>{{$employee->name}}</span> 
                        <span wire:click="detachRelation({{ $job->id }}, '{{ $employee->id }}')" class="cursor-pointer text-orange-100 font-medium text-sm hover:opacity-50">
                            <u>verwijder</u>
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    @endforeach
</div>
