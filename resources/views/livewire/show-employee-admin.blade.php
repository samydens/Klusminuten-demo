@section('title')
    Klusser bewerken
@endsection

@section('link')
    <a href="/admin?slide=1" class="text-orange-100">{!! file_get_contents('icons/exit.svg') !!}</a>
@endsection

<div class="mx-4 flex flex-col space-y-16">

    <livewire:admin-employee-details :employeeId="$employeeId" />

    <livewire:admin-employee-jobs :employeeId="$employeeId" />

    <livewire:admin-employee-minmat :employeeId="$employeeId" />

    {{-- White space --}}
    <div class="bg-white w-full h-52"></div>
</div>
