<x-admin-details title="Details:">

    {{-- Name --}}
    <x-input id="full_name" label="naam:" type="text" prop="client.full_name" placeholder="Bijv. Karel Klant" />
    @error('client.full_name') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    {{-- Adres --}}
    <x-input id="adres" label="adres:" type="text" prop="client.adres" placeholder="Bijv. Straat 1" />
    @error('client.adres') <span class="text-red text-sm"> {{ $message }} </span> @enderror
    
    {{-- Zip code --}}
    <x-input id="zip" label="postcode:" type="text" prop="client.zip" placeholder="Bijv. 1111AA" />
    @error('client.zip') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    {{-- City --}}
    <x-input id="city" label="woonplaats:" type="text" prop="client.city" placeholder="Bijv. Amsterdam" />
    @error('client.city') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    {{-- Phone Number --}}
    <x-input id="phone_number" label="telefoonnummer:" type="text" prop="client.phone_number" placeholder="Bijv. 0612345678" />
    @error('client.phone_number') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    {{-- Mail --}}
    <x-input id="mail" label="email:" type="text" prop="client.mail" placeholder="Bijv. klant@klant.com" />
    @error('client.mail') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    {{-- submit button --}}
    @if ($showSubmit)
        {{-- Submit --}}
        <div class="mt-8 w-full text-center">
            <button type="submit" class="px-4 py-2 bg-gradient-to-tr from-orange-100 to-orange-200 text-white rounded-full">Wijzigingen opslaan</button>
        </div>
    @endif

    {{-- Message --}}
    @if (session()->has('message'))
        <div class="text-center mt-4">
            <span class="text-orange-100 text-sm"> {{ session('message') }} </span>
        </div>
    @endif

</x-admin-details>
