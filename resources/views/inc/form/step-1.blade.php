{{-- Select Client --}}
<x-widget>

    {{-- Form title --}}
    <p class="font-ubuntu font-bold text-xl">Klant</p>
    
    {{-- Step count --}}
    <p class="text-gray-300">Stap {{$step + 1}}</p>

    {{-- Form description --}}
    <p class="text-gray-300 mt-4">
        Hier kan je klantens toevoegen aan de klus. Kies een klant die al in het
        systeem staat of voeg een nieuwe klant toe aan het systeem door op 'nieuwe klant' te klikken.
    </p>

    {{-- Loop trough selectEmp --}}
    @foreach ($selectClient as $key => $client)
        <div class="mt-4">

            {{-- Label --}}
            <label for="selectClient.{{ $key }}" class="text-sm text-gray-300">Klant:<br /></label>
            
            {{-- Select with values from selectEmp. When a key has no value, user can set it. --}}
            <div class="flex flex-row items-center">
                <select wire:model.lazy="selectClient.{{ $key }}" id="selectClient.{{ $key }}" class="bg-gray-200 border border-gray-400 rounded w-11/12">
                    
                    {{-- Standard option --}}
                    <option value="">Kies een klant</option>
                    
                    {{-- Iterate trough all employees as options. --}}
                    @foreach ($customerIndex as $client)
                        <option value="{{$client->id}}">{{$client->full_name}}</option>
                    @endforeach
                </select>
                
                {{-- Delete chosen employee from selectEmp. --}}
                <button wire:click.prevent="deleteClientFieldById({{$key}})" class="text-red ml-1">{!! file_get_contents('icons/exit.svg') !!}</button>
            
            </div>
        </div>
    @endforeach
    
    @error('selectClient') <span class="text-red text-sm">{{ $message }}</span> @enderror

    {{-- Add new or excisting employee. --}}
    <button wire:click.prevent="addClientField" class="text-orange-100 border-2 border-orange-100 flex flex-row rounded px-2 mt-4 w-full justify-center">bestaande klant {!! file_get_contents('icons/plus.svg') !!}</button>
    <p class="w-full text-center text-gray-300 text-sm my-2">of</p>
    <button wire:click.prevent="newClient" class="bg-orange-100 rounded text-white flex flex-row px-2 border-2 border-orange-100 w-full justify-center">nieuwe klant {!! file_get_contents('icons/plus.svg') !!} </button>
    
    {{-- Next & previous buttons --}}
    @include('inc.form.next-back')
    
</x-widget>