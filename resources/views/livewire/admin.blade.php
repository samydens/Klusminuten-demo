<div class="font-roboto">
    <nav class="bg-white shadow">
        
        {{-- page title --}}
        <div class="flex flex-row font-roboto py-8 px-8 text-2xl container mx-auto">
            <p class="text-orange-100 font-bold">Klusminuten</p><p class="text-gray-300">admin</p>
        </div>
        
        {{-- nav --}}
        <div class="flex justify-between text-gray-300 text-sm">
            <div wire:click="$set('slide', 0)" class="text-center w-full py-2 {{ $slide == 0 ? 'border-b-2 border-orange-100 text-orange-100' : '' }}">
                <p>klus</p>
            </div>
            <div wire:click="$set('slide', 1)" class="text-center w-full py-2 {{ $slide == 1 ? 'border-b-2 border-orange-100 text-orange-100' : '' }}">
                <p>klusser</p>
            </div>
            <div wire:click="$set('slide', 2)" class="text-center w-full py-2  {{ $slide == 2 ? 'border-b-2 border-orange-100 text-orange-100' : '' }}">
                <p>klant</p>
            </div>
        </div>
    
    </nav>
    
    <div class="container mt-8 mx-auto">
        
        {{-- switch for which view to display. --}}
        @switch($slide)
            @case(0)
                <livewire:job-admin />
                @break
            @case(1)
                <livewire:employee-admin />
                @break
            @case(2)
                <livewire:client-admin />
                @break
        @endswitch
    
    </div>
    
</div>
