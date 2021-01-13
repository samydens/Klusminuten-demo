<div class="bg-white rounded-xl shadow p-4 mx-4 text-gray-500">

    {{-- Form title --}}
    <p class="font-ubuntu font-bold text-xl">Medewerkers</p>

    {{-- Step count --}}
    <p class="text-gray-300">Stap {{$step + 1}}</p>
    
    {{-- Form description --}}
    <p class="text-gray-300 mt-4">
        Hier kan je werknemers toevoegen aan de klus. Kies een medewerker die al in het
        systeem staat of voeg een nieuwe medewerker toe aan het systeem door op 'nieuwe medewerker' te klikken.
    </p>
    
    {{-- Loop trough selectEmp --}}
    @foreach ($selectEmp as $key => $employee)
        <div class="mt-4">
            <label for="selectEmp.{{$key}}" class="text-sm text-gray-300">Medewerker:<br /></label>
            <div class="flex flex-row items-center">
                <select wire:model.lazy="selectEmp.{{$key}}" id="selectEmp.{{$key}}" class="bg-gray-200 border border-gray-400 rounded">
                    <option value="">Kies een medewerker</option>
                    @foreach ($employeeIndex as $employee)
                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                    @endforeach
                </select>
                <button wire:click.prevent="deleteFieldById({{$key}})" class="text-red ml-1">{!! file_get_contents('icons/exit.svg') !!}</button>
            </div>
        </div>
    @endforeach

    {{-- New or excisting employee --}}
    <button wire:click.prevent="addField" class="text-orange-100 border-2 border-orange-100 flex flex-row rounded px-2 mt-4">bestaande klusser {!! file_get_contents('icons/plus.svg') !!}</button>
    <button wire:click.prevent="newEmployee" class="bg-orange-100 rounded text-white flex flex-row px-2 mt-4 border-2 border-orange-100">nieuwe klusser {!! file_get_contents('icons/plus.svg') !!} </button>
    
    {{-- Next & previous buttons --}}
    <div class="mt-8 flex flex-row space-x-4">
        <div wire:click="previousStep" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded text-center">Terug</div>
        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Volgende</button>
    </div>

</div>