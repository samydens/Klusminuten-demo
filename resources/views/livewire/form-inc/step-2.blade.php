{{-- Select employees --}}
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

            {{-- Label --}}
            <label for="selectEmp.{{$key}}" class="text-sm text-gray-300">Medewerker:<br /></label>
            
            {{-- Select with values from selectEmp. When a key has no value, user can set it. --}}
            <div class="flex flex-row items-center">
                <select wire:model.lazy="selectEmp.{{$key}}" id="selectEmp.{{$key}}" class="bg-gray-200 border border-gray-400 rounded w-11/12">
                    
                    {{-- Standard option --}}
                    <option value="">Kies een medewerker</option>
                    
                    {{-- Iterate trough all employees as options. --}}
                    @foreach ($employeeIndex as $employee)
                        <option value="{{$employee->id}}">{{$employee->name}}</option>
                    @endforeach
                </select>
                
                {{-- Delete chosen employee from selectEmp. --}}
                <button wire:click.prevent="deleteFieldById({{$key}})" class="text-red ml-1">{!! file_get_contents('icons/exit.svg') !!}</button>
            
            </div>
        </div>
    @endforeach
    
    @error('selectEmp') <span class="text-red text-sm">{{ $message }}</span> @enderror

    {{-- Add new or excisting employee. --}}
    <button wire:click.prevent="addField" class="text-orange-100 border-2 border-orange-100 flex flex-row rounded px-2 mt-4 w-full justify-center">bestaande klusser {!! file_get_contents('icons/plus.svg') !!}</button>
    <p class="w-full text-center text-gray-300 text-sm my-2">of</p>
    <button wire:click.prevent="newEmployee" class="bg-orange-100 rounded text-white flex flex-row px-2 border-2 border-orange-100 w-full justify-center">nieuwe klusser {!! file_get_contents('icons/plus.svg') !!} </button>
    
    {{-- Next and back buttons. --}}
    @include('livewire.form-inc.next-back')

</div>