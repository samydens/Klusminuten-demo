<div class="flex flex-col space-y-4">

    {{-- Header --}}
    <div class="flex justify-between items-center">
        <x-regheader>Bedrijven</x-regheader>
        <p wire:click="$set('newCompany', 'True')" class="text-orange-100">{!! file_get_contents('icons/plus.svg') !!}</p>
    </div>

    {{-- Foreach with companies --}}
    <div class="flex flex-col space-y-2">
        @each('inc.admin.company', $companies, 'company', 'inc.admin.no-companies')

        {{-- If user clicked on '+' then show form where user can attach new employee to job --}}
        @if ($newCompany)
            <form wire:submit.prevent="submit" class="flex items-center justify-between">
                <select wire:model="newCompanyId" class="border border-gray-400 bg-gray-200 rounded w-11/12">
                    <option value="">Selecteer een bedrijf</option>
                    @each('inc.admin.company-option', $allCompanies, 'company', 'inc.admin.no-company-option')
                </select>
                <button type="submit" class="text-orange-100 focus:outline-none">{!! file_get_contents('icons/save.svg') !!}</button>
            </form>
        @endif
    </div>
</div>
