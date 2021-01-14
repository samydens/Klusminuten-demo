{{-- New Employee --}}
<x-widget>

    {{-- Form title --}}
    <p class="font-ubuntu font-bold text-xl">Nieuwe medewerker toevoegen</p>
    
    {{-- Step count --}}
    <p class="text-gray-300">Stap {{$step - 2}}</p>
    
    {{-- Employee name --}}
    <x-input id="employee_name" label="naam:" type="text" prop="employee.name" placeholder="bijv. Frans Timmermans" />
    @error('employee.name') <span class="text-sm text-red">{{$message}}</span> @enderror

    {{-- Employee ID --}}
    <x-input id="vakman_id" label="Vakman ID:" type="number" prop="employee.vakman_id" placeholder="bijv. 5" />
    @error('employee.vakman_id') <span class="text-sm text-red">{{$message}}</span> @enderror

    {{-- Employee ID --}}
    <x-input id="phone_number" label="Telefoonnummer:" type="number" prop="employee.employee_phone" placeholder="bijv. 0612345678" />
    @error('employee.employee_phone') <span class="text-sm text-red">{{$message}}</span> @enderror

    {{-- Next & previous buttons --}}
    <div class="mt-4 flex flex-row space-x-4">
        <button wire:click.prevent="backFromNew" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded mt-8">Terug</button>
        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded mt-8">Opslaan</button>
    </div>

</x-widget>