<x-admin-details title="Details">

    {{-- Username --}}
    <x-input id="name" label="naam:" type="text" prop="user.name" placeholder="typ hier uw gebruikersnaam" />
    @error('user.name') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    {{-- Email --}}
    <x-input id="email" label="e-mail:" type="text" prop="user.email" placeholder="typ hier uw e-mail" />
    @error('user.email') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    @if ($showSubmit)
        <div class="mt-8 w-full text-center">
            <button type="submit" class="px-4 py-2 bg-gradient-to-tr from-orange-100 to-orange-200 text-white rounded-full">Wijzigingen opslaan</button>
        </div>
    @endif

    @if (session()->has('message'))
        <div class="text-center mt-4">
            <span class="text-orange-100 text-sm"> {{ session('message') }} </span>
        </div>
    @endif


</x-admin-details>
