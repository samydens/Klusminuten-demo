@section('title')
    Klus bewerken
@endsection

<div class="mx-4 flex flex-col space-y-16">

    <livewire:admin-job-details :jobId="$jobId" />

    <livewire:admin-job-employees :jobId="$jobId" />

    <livewire:admin-job-client :jobId="$jobId" />

</div>
