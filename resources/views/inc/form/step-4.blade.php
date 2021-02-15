{{-- New Client --}}
<x-widget>

    {{-- Form title --}}
    <p class="font-ubuntu font-bold text-xl">Nieuwe klant toevoegen</p>
    
    {{-- Step count --}}
    <p class="text-gray-300">Stap {{ $step - 2 }} </p>
    
    {{-- Client name --}}
    <x-inputs.input wire:model="client.full_name" id="client_name" label="(verplicht) naam:" placeholder="bijv. Kees Jan" />
    @error('client.full_name') <span class="text-sm text-red"> {{ $message }} </span> @enderror
    
    {{-- Client adres --}}
    <x-inputs.input wire:model="client.adres" id="client_adres" label="(verplicht) adres:" placeholder="bijv. Straat 1" />
    @error('client.adres') <span class="text-sm text-red"> {{ $message }} </span> @enderror
    
    {{-- Client ZIP --}}
    <x-inputs.input wire:model="client.zip" id="client_zip" label="postcode:" placeholder="bijv. 1234AB" />
    @error('client.zip') <span class="text-sm text-red"> {{ $message }} </span> @enderror
    
    {{-- Client city --}}
    <x-inputs.input wire:model="client.city" id="client_city" label="(verplicht) plaats:" placeholder="bijv. Amsterdam" />
    @error('client.city') <span class="text-sm text-red"> {{ $message }} </span> @enderror
    
    {{-- Client phone --}}
    <x-inputs.input wire:model="client.phone_number" id="client_phone" label="telefoonnummer:" placeholder="bijv. 0612345678" />
    @error('client.phone_number') <span class="text-sm text-red"> {{ $message }} </span> @enderror
    
    {{-- Client mail --}}
    <x-inputs.input wire:model="client.mail" id="client_mail" label="(verplicht) E-mail:" placeholder="bijv. keesjan@bedrijf.nl" />
    @error('client.mail') <span class="text-sm text-red"> {{ $message }} </span> @enderror
    
    {{-- Next & previous buttons --}}
    <div class="mt-8 flex flex-row space-x-4">
        <div wire:click="backFromNew" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded text-center">Terug</div>
        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Opslaan</button>
    </div>
</x-widget>