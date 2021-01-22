@section('title')
    Klus bewerken
@endsection

<div class="mx-4 flex flex-col space-y-16">

    <livewire:admin-job-details :jobId="$jobId" />

    <livewire:admin-job-employees :jobId="$jobId" />

    <livewire:admin-job-client :jobId="$jobId" />

    <livewire:admin-job-minutes-material :jobId="$jobId" />

    <div class="bg-white w-full h-52"></div>
</div>
