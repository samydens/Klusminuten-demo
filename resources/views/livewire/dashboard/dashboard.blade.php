@section('title')
    <div class="flex justify-between items-center mx-4">
        <div>
            <p class="text-xl text-white font-ubuntu font-bold">Dashboard</p>
            <p class="text-sm text-white opacity-50">Hier staan alle klussen in uitvoering</p>
        </div>
        @can('access admin')
            <a href="/admin" class="text-white">{!! file_get_contents('icons/admin.svg') !!}</a>
        @endcan
    </div>
@endsection

<div class="space-y-4 relative">
   
    @foreach ($jobs as $job)  
        <livewire:dashboard.components.job-widget :job="$job" :key="$job->id" /> 
    @endforeach

</div>

