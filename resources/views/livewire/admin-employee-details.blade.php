<x-admin-details title="Details:">

    {{-- Name --}}
    <x-input id="name" label="naam:" type="text" prop="employee.name" placeholder="Bijv. Frans Timmmermans" />
    @error('employee.name') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    {{-- Vakman_id --}}
    <x-input id="vakman_id" label="vakman_id:" type="text" prop="employee.vakman_id" placeholder="Bijv. 2" />
    @error('employee.vakman_id') <span class="text-red text-sm"> {{ $message }} </span> @enderror
    
    {{-- Phone number --}}
    <x-input id="phonenumber" label="telefoonnummer:" type="text" prop="employee.phone_number" placeholder="Bijv. 0612345678" />
    @error('employee.phone_number') <span class="text-red text-sm"> {{ $message }} </span> @enderror

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
