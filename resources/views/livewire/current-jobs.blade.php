
@if (!empty($activeJobs))
<div class="space-y-4">
    
    {{-- Display messages --}}
    @if (session()->has('message'))
        <div class="relative bg-white text-orange-100 rounded-xl shadow p-4">
            {{session('message')}}
        </div>
    @endif

    @foreach ($activeJobs as $job)
            <livewire:single-current-job :job="$job" :key="$job->id">
    @endforeach

</div>
@else
    <p>No active jobs</p>
@endif