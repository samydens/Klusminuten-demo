<div class="flex flex-col space-y-4">
    <x-regheader>Bedrijf</x-regheader>
    
    {{-- Business icon and  --}}
    <div class="flex items-center">
        <p class="text-orange-100 mr-2">{!! file_get_contents('icons/business.svg') !!}</p>
        
        {{-- Select for company --}}
        <select wire:model="company">
            <option value="">geen bedrijf</option>
            @each('inc.admin.company-option', $companies, 'company')
        </select>
    </div>

    {{-- Validation message --}}
    @error('company') <span class="text-red text-xs"> {{ $message }} </span> @enderror
    
    {{-- Display message if saved message isset --}}
    @if (session()->has('message'))
        <span class="text-orange-100 text-xs"> {{ session('message') }} </span>
    @endif
    
</div>

