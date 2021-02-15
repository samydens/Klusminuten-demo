<div class="flex flex-col space-y-4">
        
    <div class="flex justify-between items-center">
        <x-regheader>Klanten:</x-regheader>
        <p wire:click="$set('newClient', 'True')" class="text-orange-100">{!! file_get_contents('icons/plus.svg') !!}</p>
    </div>

    <div class="flex flex-col space-y-2">
    
        @each('inc.admin.clients', $job->clients, 'client', 'inc.admin.no-clients')

        @if ($newClient)
            
            <select wire:model="newClientId" class="border border-gray-400 bg-gray-200 rounded w-11/12">
                
                <option value="">Selecteer een klant</option>
                
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                @endforeach
            
            </select>
        
        @endif
    
    </div>
</div>
