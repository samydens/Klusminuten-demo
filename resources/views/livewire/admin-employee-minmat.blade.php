<div class="flex flex-col space-y-4">
    <x-regheader>
        Minuten en materiaalkosten
    </x-regheader>

    <div class="flex flex-col space-y-4">
        <div class="flex flex-col space-y-2">

            {{-- Loop trough days. --}}
            @foreach ($minutes as $day => $minute_list)
                
                {{-- Display date. --}}
                <p class="text-gray-300 text-sm">{{ $day }}</p>

                {{-- Loop trough minute records for that day. --}}
                @foreach ($minute_list as $minute)
                    <livewire:admin-minutes :recordId="$minute->id" :title="True" />
                @endforeach

            @endforeach
        </div>

        <div class="flex flex-col space-y-2">
            {{-- Loop trough dates. --}}
            @foreach ($materials as $day => $material_list)
                
                {{-- Display date. --}}
                <p class="text-gray-300 text-sm">{{ $day }}</p>

                {{-- Loop trough records for that day. --}}
                @foreach ($material_list as $material)
                    <livewire:admin-materials :materialId="$material->id" :title="True" />
                @endforeach
            
            @endforeach
        </div>
    
        {{-- Link to all records. --}}
        <div class="w-full">
            <a href="/admin/minmat/{{ $user_id }}?type=user_id" class="text-orange-100 font-medium float-right"><u>Meer bekijken</u></a>
        </div>
    
    </div>
</div>
