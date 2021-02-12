<x-widget title="Nieuwe medewerker toevoegen">
    
    <p class="text-gray-300 text-sm">Stap {{$step - 2}}</p>
    
    <x-inputs.input wire:model="employee.name" id="employee_name" label="(verplicht) naam:" placeholder="bijv. Frans Timmermans" />
    @error('employee.name') <span class="text-sm text-red">{{$message}}</span> @enderror

    <x-inputs.input wire:model="employee.vakman_id" type="number" id="vakman_id" label="Vakman ID:" placeholder="bijv. 5" />
    @error('employee.vakman_id') <span class="text-sm text-red">{{$message}}</span> @enderror

    <x-inputs.input wire:model="employee.phone_number" type="number" id="phone_number" label="Telefoonnummer:" type="number" prop="employee.employee_phone" placeholder="bijv. 0612345678" />
    @error('employee.phone_number') <span class="text-sm text-red">{{$message}}</span> @enderror

    {{-- Next & previous buttons --}}
    <div class="mt-4 flex flex-row space-x-4">
        <button wire:click.prevent="backFromNew" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded mt-8">Terug</button>
        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded mt-8">Opslaan</button>
    </div>

</x-widget>