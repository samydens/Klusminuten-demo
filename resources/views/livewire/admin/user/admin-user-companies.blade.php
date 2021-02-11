<div class="flex flex-col space-y-4">

    {{-- Header --}}
    <x-regheader>Bedrijf</x-regheader>
    
    {{-- Select with company --}}
    <div class="flex items-center">
        <p class="text-orange-100 mr-2">{!! file_get_contents('icons/business.svg') !!}</p>
        <form wire:submit.prevent="submit">
            <select wire:model="user.company_id" class="bg-gray-200 border border-gray-400 rounded p-1">
                <option value="">Geen bedrijf</option>
                @each('inc.admin.company-option', $companies, 'company', 'inc.admin.no-company-option')
            </select>
        </form>
    </div>
    
    {{-- Message --}}
    @if (session()->has('message')) <span class="text-orange-100 text-sm">{{ session('message') }}</span> @endif
</div>