<div class="flex justify-between items-center">
    <div class="flex items-center">
        <p class="text-orange-100 mr-2">{!! file_get_contents('icons/business.svg') !!}</p>
        <p>{{ $company->name }}</p>
    </div>
    <p wire:click="detach({{ $company->id }})" class="text-orange-100">{!! file_get_contents('icons/min.svg') !!}</p>
</div>