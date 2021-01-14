{{-- New Client --}}
<x-widget>

    {{-- Form title --}}
    <p class="font-ubuntu font-bold text-xl">Nieuwe klant toevoegen</p>
    
    {{-- Step count --}}
    <p class="text-gray-300">Stap {{$step - 2}}</p>
    
    {{-- Client name --}}
    <div class="mt-8">
        <label for="clientName" class="text-sm text-gray-300">naam:<br></label>
        <input wire:model.lazy="client.full_name" id="clientName" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. Kees Jan" type="text">
        @error('client.full_name') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    {{-- Client adres --}}
    <div class="mt-4">
        <label for="clientAdres" class="text-sm text-gray-300">adres:<br></label>
        <input wire:model.lazy="client.adres" id="clientAdres" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. Straat 1" type="text">
        @error('client.adres') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    {{-- Client ZIP --}}
    <div class="mt-4">
        <label for="clientZip" class="text-sm text-gray-300">postcode:<br></label>
        <input wire:model.lazy="client.zip" id="clientZip" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. 1234AB" type="text">
        @error('client.zip') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    {{-- Client city --}}
    <div class="mt-4">
        <label for="clientCity" class="text-sm text-gray-300">plaats:<br></label>
        <input wire:model.lazy="client.city" id="clientCity" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. Amsterdam" type="text">
        @error('client.city') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    {{-- Client phone --}}
    <div class="mt-4">
        <label for="clientPhone" class="text-sm text-gray-300">telefoonnummer:<br></label>
        <input wire:model.lazy="client.client_phone" id="clientPhone" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. 0612345678" type="text">
        @error('client.client_phone') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    {{-- Client mail --}}
    <div class="mt-4">
        <label for="clientMail" class="text-sm text-gray-300">E-mail:<br></label>
        <input wire:model.lazy="client.mail" id="clientMail" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="bijv. keesjan@bedrijf.nl" type="text">
        @error('client.mail') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    {{-- Next & previous buttons --}}
    <div class="mt-8 flex flex-row space-x-4">
        <div wire:click="backFromNew" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded text-center">Terug</div>
        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Opslaan</button>
    </div>
</x-widget>