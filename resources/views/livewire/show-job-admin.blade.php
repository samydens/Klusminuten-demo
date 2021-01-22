@section('title')
    Klus bewerken
@endsection

<div class="mx-4 flex flex-col space-y-16">

    {{-- Details of job --}}
    <livewire:admin-job-details :jobId="$jobId" />

    {{-- Employees attached to job. --}}
    <livewire:admin-job-employees :jobId="$jobId" />

    {{-- Client attached to job. --}}
    <livewire:admin-job-client :jobId="$jobId" />

    {{-- Material & minutes. --}}
    <livewire:admin-job-minutes-material :jobId="$jobId" />

    {{-- white space. --}}
    <div class="bg-white w-full h-52"></div>
</div>
