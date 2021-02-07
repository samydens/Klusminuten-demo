@section('title')
    Klus bewerken
@endsection

{{-- 'X' button --}}
@section('link')
    <a href="/admin?slide=0" class="text-orange-100">{!! file_get_contents('icons/exit.svg') !!}</a>
@endsection

{{-- All the 'sections' --}}
<div class="mx-4 flex flex-col space-y-12 mb-8">
    
    {{-- Details of job --}}
    <livewire:admin.job.admin-job-details :job="$job" />
    
    {{-- Companies --}}
    <livewire:admin.job.admin-job-companies :job="$job" />

    {{-- Employees attached to job. --}}
    <livewire:admin.job.admin-job-employees :job="$job" />

    {{-- Client attached to job. --}}
    <livewire:admin.job.admin-job-client :job="$job" />

    {{-- Material & minutes. --}}
    <livewire:admin.job.admin-job-minutes-material :job="$job" />

    {{-- Status --}}
    <livewire:admin.job.admin-job-status :job="$job" />
    
    {{-- Delete job --}}
    <livewire:admin.job.admin-job-delete :job="$job" />
    

</div>
