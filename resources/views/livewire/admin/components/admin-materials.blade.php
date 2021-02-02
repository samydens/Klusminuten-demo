<div class="flex flex-row justify-between">
            
    <div class="flex justify-between items-center">
        <p class="text-orange-100 mr-4">{!! file_get_contents('icons/euro.svg') !!}</p>
        <p>{{  $title }}</p>
    </div>
    
    <div class="flex justify-between items-center">
        @if ($edit)
            <form wire:submit.prevent="submit" class="flex items-center">
                <input wire:model="material" type="text" class="border border-gray-400 bg-gray-200 rounded w-24">
                <button type="submit" class="text-orange-100 ml-4">{!! file_get_contents('icons/save.svg') !!}</button>
            </form>
        @else   
            <p class="p-1 bg-gradient-to-tr from-gray-600 to-gray-700 rounded mr-4 font-medium text-sm">€{{ $material }}</p>
            <p wire:click="$toggle('edit')" class="text-orange-100">{!! file_get_contents('icons/edit.svg') !!}</p>
        @endif
    </div>

</div>
