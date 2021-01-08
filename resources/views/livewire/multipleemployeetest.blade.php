<div class="text-gray-500">
    <div class="bg-white rounded-xl shadow p-4 my-4">
        <div class="flex flex-col">
            <label for="job" class="text-gray-300 text-sm">Klus:</label>
            <div>
                <select wire:model="jobId" id="job" class="bg-gray-200 border border-gray-400 rounded">
                    <option value="">Kies een klus</option>
                    @foreach ($jobs as $job)
                        <option value="{{$job->id}}">{{$job->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-xl shadow p-4 my-4">
        <h1 class="font-bold font-ubuntu text-xl">Medewerkers</h1>
        <form wire:submit.prevent="submit">
            @for ($i = 0; $i < $fields; $i++)
                <div class="flex flex-col">
                    <label for="employee{{$i}}" class="text-gray-300 text-sm">Medewerker:</label>
                    <div>
                        <select wire:model="selectedEmployees.{{$i}}" class="bg-gray-200 border border-gray-400 rounded">
                            <option value="">Kies een medewerker</option>
                            @foreach ($employees as $employee)  
                                <option value="{{$employee->id}}">{{$employee->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endfor
            <button type="submit" class="bg-orange-100 text-white border-2 border-orange-100 rounded px-2 py-1 mt-4">opslaan</button>
        </form>
        <button wire:click="addField" class="border-2 border-orange-100 text-orange-100 rounded px-2 py-1 mt-4">Medewerker toevoegen</button>
        <button wire:click="deleteField" class="bg-orange-100 text-white border-2 border-orange-100 rounded px-2 py-1 mt-4">Medewerker verwijderen</button>
    </div>
</div>
