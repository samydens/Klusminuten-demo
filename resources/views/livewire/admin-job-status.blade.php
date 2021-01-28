<div class="space-y-4">

    <x-regheader>
        Status
    </x-regheader>
    
    <form wire:submit.prevent="submit" class="flex flex-row justify-between items-center">

        <select wire:model.lazy="currentStatus" class="border-b-2 border-orange-100 w-full">
            <option value="0">nog niet begonnen</option>
            <option value="1">in uitvoering</option>
            <option value="2">archief</option>
        </select>
        
        @if ($edited)
            <button type="submit" class="text-orange-100 ml-2">{!! file_get_contents('icons/save.svg') !!}</button>
        @endif
    
    </form>

</div>
