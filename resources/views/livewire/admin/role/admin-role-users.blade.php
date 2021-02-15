<div class="flex flex-col space-y-4">

    <div class="flex justify-between items-center">
        <x-regheader>Gebruikers</x-regheader>
        <p wire:click="$toggle('newUser')" class="text-orange-100 cursor-pointer">{!! file_get_contents('icons/plus.svg') !!}</p>
    </div>

    <div class="flex flex-col space-y-2">
        
        @each('inc.admin.user', $role->users, 'user')
        
        @if ($newUser)
            <select wire:model="newUserId" class="border border-gray-400 bg-gray-200 rounded w-11/12">
                
                <option value="">Selecteer een gebruiker</option>
                
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            
            </select>
        
        @endif
    
    </div>
</div>
