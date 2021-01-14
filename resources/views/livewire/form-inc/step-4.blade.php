{{-- New Client --}}
<x-widget>

    {{-- Form title --}}
    <p class="font-ubuntu font-bold text-xl">Nieuwe klant toevoegen</p>
    
    {{-- Step count --}}
    <p class="text-gray-300">Stap {{$step - 2}}</p>
    
    {{-- Client name --}}
    <x-input id="client_name" label="naam:" type="text" prop="client.full_name" placeholder="bijv. Kees Jan" />
    @error('client.full_name') <span class="text-sm text-red">{{$message}}</span> @enderror
    
    {{-- Client adres --}}
    <x-input id="client_adres" label="adres:" type="text" prop="client.adres" placeholder="bijv. Straat 1" />
    @error('client.adres') <span class="text-sm text-red">{{$message}}</span> @enderror
    
    {{-- Client ZIP --}}
    <x-input id="client_zip" label="postcode:" type="text" prop="client.zip" placeholder="bijv. 1234AB" />
    @error('client.zip') <span class="text-sm text-red">{{$message}}</span> @enderror
    
    {{-- Client city --}}
    <x-input id="client_city" label="plaats:" type="text" prop="client.city" placeholder="bijv. Amsterdam" />
    @error('client.city') <span class="text-sm text-red">{{$message}}</span> @enderror
    
    {{-- Client phone --}}
    <x-input id="client_phone" label="telefoonnummer:" type="text" prop="client.client_phone" placeholder="bijv. 0612345678" />
    @error('client.client_phone') <span class="text-sm text-red">{{$message}}</span> @enderror
    
    {{-- Client mail --}}
    <x-input id="client_mail" label="E-mail:" type="text" prop="client.mail" placeholder="bijv. keesjan@bedrijf.nl" />
    @error('client.mail') <span class="text-sm text-red">{{$message}}</span> @enderror
    
    {{-- Next & previous buttons --}}
    <div class="mt-8 flex flex-row space-x-4">
        <div wire:click="backFromNew" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded text-center">Terug</div>
        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Opslaan</button>
    </div>
</x-widget>