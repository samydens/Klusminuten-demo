<div class="relative">
    <div class="bg-white rounded-xl shadow m-4 p-4">
        <p class="text-2xl font-ubuntu font-bold text-gray-500">Kies een medewerker</p>
        <div class="flex flex-col mt-4">
            <label class="text-gray-300 text-xs" for="employee">Medewerker</label>
            <select class="border-b-2 border-orange-100" wire:model="employees" id="employee">
                <option value="5" selected="selected">Alle medewerkers</option>
                @foreach($employees as $employee)
                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>


