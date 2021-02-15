<div class="flex flex-col space-y-4">
    
    <x-regheader>User</x-regheader>
    
    <div class="flex flex-row items-center">
        
        <p class="text-orange-100 mr-2">{!! file_get_contents('icons/person.svg') !!}</p>
        
        <select wire:model="employee.user_id">
         
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        
        </select>
        
    </div>
    
    @if (session()->has('message')) <span class="text-orange-100 text-sm">{{ session('message') }}</span> @endif
    
</div>
