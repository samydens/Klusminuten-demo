<div class="flex flex-col space-y-4">

    {{-- Header --}}
    <div class="flex justify-between items-center">
        <x-regheader>Bedrijven</x-regheader>
        <p wire:click="$set('newCompany', 'True')" class="text-orange-100">{!! file_get_contents('icons/plus.svg') !!}</p>
    </div>

    {{-- Foreach with companies --}}
    @each('inc.admin.company', $job->companies, 'company', 'inc.empty')

    {{-- If the user clicked on '+' then show form for adding new company to job. --}}
    @if ($newCompany)
        <form wire:submit.prevent="submit" class="flex items-center justify-between">
            <select wire:model="newCompanyId" class="border border-gray-400 bg-gray-200 rounded w-11/12">
                @each('inc.admin.company-option', $allCompanies, 'company')
            </select>
            <button type="submit" class="text-orange-100">{!! file_get_contents('icons/save.svg') !!}</button>
        </form>
    @endif

</div>

