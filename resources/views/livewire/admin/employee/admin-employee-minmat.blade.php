<div class="flex flex-col space-y-4">
    
    <x-regheader>Minuten en materiaalkosten</x-regheader>

    <div class="flex flex-col space-y-4">
        <div class="flex flex-col space-y-2">

            @foreach ($minutes as $day => $minute_list)

                <p class="text-gray-300 text-sm">{{ $day }}</p>

                @foreach ($minute_list as $minute)
                    <livewire:admin.components.admin-minutes :recordId="$minute->id" :title="True" />
                @endforeach

            @endforeach
  
        </div>

        <div class="flex flex-col space-y-2">

            @foreach ($materials as $day => $material_list)
                
                <p class="text-gray-300 text-sm">{{ $day }}</p>

                @foreach ($material_list as $material)
                    <livewire:admin.components.admin-materials :materialId="$material->id" :title="True" />
                @endforeach
            
            @endforeach
  
        </div>

        <div class="w-full">
            <a href="/admin/minmat/{{ $employee->user_id }}?type=user_id" class="text-orange-100 font-medium float-right"><u>Meer bekijken</u></a>
        </div>
    
    </div>

</div>
