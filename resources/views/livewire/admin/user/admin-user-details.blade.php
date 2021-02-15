<x-admin-details title="Details">

    <x-inputs.input wire:model.lazy="user.name" id="name" label="naam:" placeholder="typ hier uw gebruikersnaam" />
    @error('user.name') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    <x-inputs.input wire:model.lazy="user.email" id="email" label="mail:" placeholder="typ hier uw e-mail" />
    @error('user.email') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    @if (session()->has('message')) <span class="text-orange-100 text-sm"> {{ session('message') }} </span> @endif

</x-admin-details>
