<div class="flex flex-col space-y-4">
    <x-regheader>Bedrijven</x-regheader>
    <div class="flex items-center">
        <p class="text-orange-100 mr-2">{!! file_get_contents('icons/business.svg') !!}</p>
        <select wire:model="company">
            @each('inc.admin.company-option', $companies, 'company', 'inc.empty')
        </select>
    </div>
    @error('company') <span class="text-red text-xs"> {{ $message }} </span> @enderror
    @if (session()->has('message'))
        <span class="text-orange-100 text-xs"> {{ session('message') }} </span>
    @endif
</div>

