@section('title')
    Klusser bewerken
@endsection

<div class="mx-4 flex flex-col space-y-16">

    <livewire:admin-employee-details :employeeId="$employeeId" />

    <livewire:admin-employee-jobs :employeeId="$employeeId" />

    {{-- White space --}}
    <div class="bg-white w-full h-52"></div>
</div>
