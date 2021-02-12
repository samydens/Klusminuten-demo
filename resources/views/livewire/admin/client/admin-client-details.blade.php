<x-admin-details title="Details">

    <x-inputs.input wire:model.lazy="client.full_name" id="full_name" label="naam:" placeholder="Bijv. Karel Klant" />
    @error('client.full_name') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    <x-inputs.input wire:model.lazy="client.adres" id="adres" label="adres:" placeholder="Bijv. Straat 1" />
    @error('client.adres') <span class="text-red text-sm"> {{ $message }} </span> @enderror
    
    <x-inputs.input wire:model.lazy="client.zip" id="zip" label="postcode:" placeholder="Bijv. 1111AA" />
    @error('client.zip') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    <x-inputs.input wire:model.lazy="client.city" id="city" label="woonplaats:" placeholder="Bijv. Amsterdam" />
    @error('client.city') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    <x-inputs.input wire:model.lazy="client.phone_number" id="phone_number" label="telefoonnummer:" placeholder="Bijv. 0612345678" />
    @error('client.phone_number') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    <x-inputs.input wire:model.lazy="client.mail" id="mail" label="email:" placeholder="Bijv. klant@klant.com" />
    @error('client.mail') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    @if (session()->has('message')) <span class="text-orange-100 text-sm"> {{ session('message') }} </span> @endif

</x-admin-details>
