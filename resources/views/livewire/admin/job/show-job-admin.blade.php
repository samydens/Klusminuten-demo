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
    <livewire:admin.job.admin-job-details :jobId="$jobId" />

    {{-- Employees attached to job. --}}
    <livewire:admin.job.admin-job-employees :jobId="$jobId" />

    {{-- Client attached to job. --}}
    <livewire:admin.job.admin-job-client :jobId="$jobId" />

    {{-- Material & minutes. --}}
    <livewire:admin.job.admin-job-minutes-material :jobId="$jobId" />

    {{-- Status --}}
    <livewire:admin.job.admin-job-status :jobId="$jobId" />

    {{-- Delete job --}}
    <livewire:admin.job.admin-job-delete :jobId="$jobId" />

</div>
