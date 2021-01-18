<div class="font-roboto">
    <nav class="bg-white shadow">
        
        {{-- Title --}}
        <div class="flex flex-row font-roboto py-8 px-8 text-2xl container mx-auto">
            <p class="text-orange-100 font-bold">Klusminuten</p><p class="text-gray-300">admin</p>
        </div>
        
        {{-- Links --}}
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
        @switch($slide)
            @case(0)
                <x-widget>
                    <p class="font-ubuntu font-bold text-xl">Klus</p>
                </x-widget>
                @break
            @case(1)
                <x-widget>
                    <p class="font-ubuntu font-bold text-xl">Klussers</p>
                </x-widget>
                @break
            @case(2)
                <x-widget>
                    <p class="font-ubuntu font-bold text-xl">Klanten</p>
                </x-widget>
                @break
        @endswitch
    </div>
    
</div>
