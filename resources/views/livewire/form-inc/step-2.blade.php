<div class="bg-white rounded-xl shadow p-4 mx-4 text-gray-500">

    {{-- Form title --}}
    <p class="font-ubuntu font-bold text-xl">Medewerker</p>
    
    {{-- Step count --}}
    <p class="text-gray-300">Stap {{$step + 1}}</p>
    
    {{-- Choose customer --}}
    <div class="mt-8">
        <label for="employee" class="text-sm text-gray-300">medewerker:<br></label>
        <input wire:model.lazy="job.employee_name" list="employees" id="employee" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="kies een bestaande medewerker">
        @error('job.employee_name') <span class="text-sm text-red">{{$message}}</span> @enderror
        <datalist id="employees">
            @foreach ($employeeIndex as $employee)
                <option value="{{$employee->name}}">
            @endforeach
        </datalist>
    </div>

    {{-- Link to new customer form --}}
    <div class="mt-4">
        <p wire:click="newEmployee" class="text-orange-100 font-medium mt-4"><u>voeg een medewerker toe</u></p>
    </div>


    {{-- Next & previous buttons --}}
    <div class="mt-8 flex flex-row space-x-4">
        <div wire:click="previousStep" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded text-center">Terug</div>
        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Volgende</button>
    </div>
</div>