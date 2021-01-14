<div class="text-gray-500">
    <div class="bg-white rounded-xl shadow p-4 mx-4">
        @foreach ($selectEmp as $employee)
        <div class="flex flex-col mt-4">
            <label for="selectEmp.{{$loop->index}}" class="text-sm text-gray-300">Medewerker:</label>    
            <select wire:model.lazy="selectEmp.{{$loop->index}}" class="bg-gray-200 border border-gray-400 rounded">
                <option value="">Selecteer een werknemer</option>
                @foreach ($allEmployees as $employee)
                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                @endforeach
            </select>
        </div>
        @endforeach
        <button wire:click="addField">{!! file_get_contents('icons/plus.svg') !!}</button>
    </div>
    <div class="bg-white rounded-xl shadow p-4 mx-4 mt-4">
        <p class="font-ubuntu font-bold text-xl">Nieuwe medewerker toevoegen</p>
        <form wire:submit.prevent="submitNewEmployee">
            <div class="mt-8">
                <label for="name" class="text-sm text-gray-300">Naam:<br /></label>
                <input wire:model="newEmployee.name" type="text" id="name" class="bg-gray-200 border border-gray-400 rounded px-1">
            </div>
            <div class="mt-4">
                <label for="vakman_id" class="text-sm text-gray-300">Vakman_id:<br /></label>
                <input wire:model="newEmployee.vakman_id" type="text" id="vakman_id" class="bg-gray-200 border border-gray-400 rounded px-1">
            </div>
            <div class="mt-4">
                <label for="phone" class="text-sm text-gray-300">Telefoonnummer:<br /></label>
                <input wire:model="newEmployee.phone" type="number" id="phone" class="bg-gray-200 border border-gray-400 rounded px-1">
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-orange-100 rounded p-2 text-white">Opslaan</button>
            </div>
        </form>
    </div>
    <livewire:delete-employees />
</div>
