<div class="flex flex-col space-y-4">
    
    <x-regheader>
        User
    </x-regheader>

    <div class="flex flex-row justify-between items-center">
        
        <div class="flex flex-row items-center">
          
            <p class="text-orange-100 mr-2">{!! file_get_contents('icons/person.svg') !!}</p>
          
            <form wire:submit.prevent="submit">
                <select wire:model="userId">
                    <option value="">Kies een gebruiker</option>
                    @foreach ($allUsers as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </form>
       
        </div>
        
        @if ($updated)
            <p wire:click="submit" class="text-orange-100">{!! file_get_contents('icons/save.svg') !!}</p>
        @endif
    
    </div>

</div>
