<x-admin-details title="Details">

    {{-- Username --}}
    <x-input id="name" label="naam:" type="text" prop="user.name" placeholder="typ hier uw gebruikersnaam" />
    @error('user.name') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    {{-- Email --}}
    <x-input id="email" label="e-mail:" type="text" prop="user.email" placeholder="typ hier uw e-mail" />
    @error('user.email') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    {{-- Message --}}
    @if (session()->has('message')) <span class="text-orange-100 text-sm"> {{ session('message') }} </span> @endif

</x-admin-details>
