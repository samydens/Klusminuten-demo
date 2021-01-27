<div>
    @if ($confirm)
        <p class="text-xl font-medium">Weet je het zeker?</p>
        <div class="flex flex-row space-x-2 w-full">
            <button wire:click="submit()" class="py-2 border-2 border-red bg-red rounded text-white flex-grow">Ja, verwijder</button>
            <button wire:click="$toggle('confirm')" class="py-2 border-2 border-orange-100 rounded text-orange-100 flex-grow">Nee, hou toch maar</button>
        </div>
    @else
        <button wire:click="$toggle('confirm')" class="py-2 px-4 bg-red rounded text-white w-full">Klus verwijderen</button>
    @endif
</div>
