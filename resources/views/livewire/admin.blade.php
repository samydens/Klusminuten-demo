<div class="font-roboto">
    <nav class="bg-white shadow">
        
        {{-- page title --}}
        <div class="flex flex-row justify-between items-center mx-auto container p-8">
            <div class="flex flex-row text-2xl">
                <p class="text-orange-100 font-bold">Klusminuten</p>
                <p class="text-gray-300">admin</p>
            </div>
            <a href="/home" class="text-gray-300">{!! file_get_contents('icons/home.svg') !!}</a>
        </div>
        
        {{-- nav --}}
        <div class="flex justify-between text-gray-300 text-sm">
            <div wire:click="$set('slide', 0)" class="text-center w-full py-2 {{ $slide == 0 ? 'border-b-2 border-orange-100 text-orange-100' : '' }}">
                <p>Klussen</p>
            </div>
            <div wire:click="$set('slide', 1)" class="text-center w-full py-2 {{ $slide == 1 ? 'border-b-2 border-orange-100 text-orange-100' : '' }}">
                <p>Klussers</p>
            </div>
            <div wire:click="$set('slide', 2)" class="text-center w-full py-2  {{ $slide == 2 ? 'border-b-2 border-orange-100 text-orange-100' : '' }}">
                <p>Klanten</p>
            </div>
            <div wire:click="$set('slide', 3)" class="text-center w-full py-2 {{ $slide == 3 ? 'border-b-2 border-orange-100 text-orange-100' : '' }}">
                <p>Gebruikers</p>
            </div>
            <div wire:click="$set('slide', 4)" class="text-center w-full py-2 {{ $slide == 4 ? 'border-b-2 border-orange-100 text-orange-100' : '' }}">
                <p>Rollen</p>
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
            @case(3)
                <livewire:user-admin />
                @break
            @case(4)
                <livewire:role-admin />
                @break
        @endswitch
    
    </div>
    
</div>
