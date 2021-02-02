@section('title')
    Minuten & materiaal
@endsection

@section('link')
    <a href="{{ url()->previous() }}" class="text-orange-100">{!! file_get_contents('icons/exit.svg') !!}</a>
@endsection

<div class="flex flex-col space-y-4 mx-4 mt-16">

    @if ($minutes->isNotEmpty())

        <div class="flex flex-col space-y-4">
                
            <x-regheader>Minuten</x-regheader>
            
            {{-- Loop trough days. --}}
            @foreach ($minutes as $day => $minute_list)
                
                <div class="flex flex-col space-y-2">
                    {{-- Display day. --}}
                    <p class="text-gray-300 text-xs">{{ $day }}</p>
                    
                    {{-- Loop trough records for that day. --}}
                    @foreach ($minute_list as $minute)
                        <livewire:admin-minutes :recordId="$minute->id" :title="$title" />
                    @endforeach
                </div>

            @endforeach
        
        </div>
        
    @endif

    @if ($materials->isNotEmpty())
    
        <div class="flex flex-col space-y-4">
                    
            {{-- Header --}}
            <x-regheader>Materiaalkosten</x-regheader>
            
            {{-- Loop trough days. --}}
            @foreach ($materials as $day => $material_list)
                
                <div class="flex flex-col space-y-2">
                    {{-- Display day. --}}
                    <p class="text-gray-300 text-xs">{{ $day }}</p>
                        
                    {{-- Loop trough records for that day. --}}
                    @foreach ($material_list as $material)
                        <livewire:admin-materials :materialId="$material->id" :title="$title" />
                    @endforeach
                </div>
            
            @endforeach
        
        </div>
    
    @endif
    
</div>
   
