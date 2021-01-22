@section('title')
    Minuten & materiaal
@endsection

<div class="flex flex-col space-y-4 mx-4 mt-16">
   
    <div class="flex flex-col space-y-2">
        
        {{-- Header --}}
        <p class="text-xl font-ubuntu font-bold mb-4 mt-6">Minuten</p>
        
        {{-- Loop trough days. --}}
        @foreach ($minutes as $day => $minute_list)
            
            {{-- Display day. --}}
            <p class="text-gray-300 text-sm">{{ $day }}</p>
            
            {{-- Loop trough records for that day. --}}
            @foreach ($minute_list as $minute)
                <livewire:admin-minutes :recordId="$minute->id" />
            @endforeach
        
        @endforeach
    
    </div>
    
    <div class="flex flex-col space-y-2">
        
        {{-- Header --}}
        <p class="text-xl font-ubuntu font-bold mb-4 mt-6">Materiaalkosten</p>
        
        {{-- Loop trough days. --}}
        @foreach ($materials as $day => $material_list)
                
            {{-- Display day. --}}
            <p class="text-gray-300 text-sm">{{ $day }}</p>
                
            {{-- Loop trough records for that day. --}}
            @foreach ($material_list as $material)
                <livewire:admin-materials :materialId="$material->id" />
            @endforeach
        
        @endforeach
    
    </div>
    <a href="/admin/job/{{ $jobId }}" class="text-orange-100 font-medium"><u>Terug</u></a>

</div>
