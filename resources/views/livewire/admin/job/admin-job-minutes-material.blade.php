<div class="flex flex-col space-y-4">
    
    <x-regheader>
        Minuten en Materiaalkosten
    </x-regheader>

    <div class="flex flex-col space-y-8">
        
        @if ($minutes->isNotEmpty())
            <div class="flex flex-col space-y-4">
                {{-- Loop trough days. --}}
                @foreach ($minutes as $day => $minute_list)
                    <div class="flex flex-col space-y-2">
                        {{-- Display date. --}}
                        <p class="text-gray-300 text-sm">{{ $day }}</p>
                        
                        {{-- Loop trough minute records for that day. --}}
                        @foreach ($minute_list as $minute)
                            <livewire:admin.components.admin-minutes :recordId="$minute->id" :title="False" />
                        @endforeach
                    </div>
                
                @endforeach
            </div>
        @endif

        @if ($materials->isNotEmpty())
            <div class="flex flex-col space-y-4">
                {{-- Loop trough dates. --}}
                @foreach ($materials as $day => $material_list)
                    <div class="flex flex-col space-y-2">
                        {{-- Display date. --}}
                        <p class="text-gray-300 text-xs">{{ $day }}</p>
                        
                        {{-- Loop trough material records for that day. --}}
                        @foreach ($material_list as $material)
                            <livewire:admin.components.admin-materials :materialId="$material->id" :title="False" />
                        @endforeach
                    </div>
                
                @endforeach
            </div>
        @endif
        
        {{-- Link to all records. --}}
        <div class="w-full">
            <a href="/admin/minmat/{{ $job->id }}?type=job_id" class="text-orange-100 font-medium float-right"><u>Meer bekijken</u></a>
        </div>
    
    </div>
    
</div>
