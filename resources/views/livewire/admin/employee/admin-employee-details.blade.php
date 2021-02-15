<x-admin-details title="Details">

    <x-inputs.input wire:model.lazy="employee.name" id="name" label="naam:" placeholder="Bijv. Frans Timmmermans" />
    @error('employee.name') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    <x-inputs.input wire:model.lazy="employee.vakman_id" id="vakman_id" label="vakman_id:" placeholder="Bijv. 2" />
    @error('employee.vakman_id') <span class="text-red text-sm"> {{ $message }} </span> @enderror
    
    <x-inputs.input wire:model.lazy="employee.phone_number" id="phonenumber" label="telefoonnummer:" placeholder="Bijv. 0612345678" />
    @error('employee.phone_number') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    @if (session()->has('message')) <span class="text-orange-100 text-sm"> {{ session('message') }} </span> @endif

</x-admin-details>
