{{-- New Employee --}}
<div class="bg-white rounded-xl shadow p-4 mx-4 text-gray-500">

    {{-- Form title --}}
    <p class="font-ubuntu font-bold text-xl">Nieuwe medewerker toevoegen</p>
    
    {{-- Step count --}}
    <p class="text-gray-300">Stap {{$step - 2}}</p>
    
    {{-- Employee name --}}
    <div class="mt-8">
        <label for="employeeName" class="text-sm text-gray-300">Naam:<br></label>
        <input wire:model.lazy="employee.name" id="employeeName" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. Frans Timmermans" type="text">
        @error('employee.name') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    {{-- Employee ID --}}
    <div class="mt-4">
        <label for="vakman_id" class="text-sm text-gray-300">Vakman ID:<br></label>
        <input wire:model.lazy="employee.vakman_id" id="vakman_id" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. 5" type="number">
        @error('employee.vakman_id') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    {{-- Employee phone --}}
    <div class="mt-4">
        <label for="phone_number" class="text-sm text-gray-300">Telefoonnummer:<br></label>
        <input wire:model.lazy="employee.employee_phone" id="phone_number" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. 0612345678" type="number">
        @error('employee.employee_phone') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    {{-- Next & previous buttons --}}
    <div class="mt-4 flex flex-row space-x-4">
        <button wire:click.prevent="backFromNew" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded mt-8">Terug</button>
        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded mt-8">Opslaan</button>
    </div>
</div>