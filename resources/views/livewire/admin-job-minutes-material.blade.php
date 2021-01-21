<div class="flex flex-col space-y-8">
    
    <x-regheader>
        Minuten en Materiaalkosten
    </x-regheader>

    <div class="flex flex-col space-y-2">

        {{-- @each('livewire.admin-inc.minuterecord', $minutes, 'minute', 'livewire.admin-inc.empty') --}}

        
        {{-- <p class="text-sm text-gray-300">Vandaag:</p>
        <div class="flex flex-row justify-between">
            
            
            <div class="flex justify-between items-center">
                <p class="text-orange-100 mr-4">{!! file_get_contents('icons/time.svg') !!}</p>
                <p class="font-medium">tuinhuisje bouwen</p>
            </div>
            
            <div class="flex justify-between items-center">
                <p class="p-1 bg-gradient-to-tr from-gray-600 to-gray-700 rounded mr-4 font-medium text-sm">40 min</p>
                <p class="text-orange-100">{!! file_get_contents('icons/edit.svg') !!}</p>
            </div>
        
        </div>

        
        <div class="flex flex-row justify-between">
            
            <div class="flex justify-between items-center">
                <p class="text-orange-100 mr-4">{!! file_get_contents('icons/euro.svg') !!}</p>
                <p class="font-medium">tuinhuisje bouwen</p>
            </div>
            
            <div class="flex justify-between items-center">
                <p class="p-1 bg-gradient-to-tr from-gray-600 to-gray-700 rounded mr-4 font-medium text-sm">€200</p>
                <p class="text-orange-100">{!! file_get_contents('icons/edit.svg') !!}</p>
            </div>
        
        </div>

        
        <p class="text-sm text-gray-300">Gisteren:</p>
        <div class="flex flex-row justify-between">
            
            
            <div class="flex justify-between items-center">
                <p class="text-orange-100 mr-3">{!! file_get_contents('icons/time.svg') !!}</p>
                <p class="font-medium">tuinhuisje bouwen</p>
            </div>
            
            <div class="flex justify-between items-center">
                <p class="p-1 bg-gradient-to-tr from-gray-600 to-gray-700 rounded mr-4 font-medium text-sm">40 min</p>
                <p class="text-orange-100">{!! file_get_contents('icons/edit.svg') !!}</p>
            </div>
        
        </div>

        
        <div class="flex flex-row justify-between">
            
            <div class="flex justify-between items-center">
                <p class="text-orange-100 mr-3">{!! file_get_contents('icons/time.svg') !!}</p>
                <p class="font-medium">vogelhuisje timmeren</p>
            </div>
            
            <div class="flex justify-between items-center">
                <p class="p-1 bg-gradient-to-tr from-gray-600 to-gray-700 rounded mr-4 font-medium text-sm">15 min</p>
                <p class="text-orange-100">{!! file_get_contents('icons/edit.svg') !!}</p>
            </div>
        
        </div> --}}
    </div>

    @foreach ($minutes as $minute)
        <livewire:admin-minutes :recordId="$minute->id" />
    @endforeach
    
    <div class="bg-white w-full h-52"></div>
</div>
