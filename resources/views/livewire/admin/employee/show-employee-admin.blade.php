@section('title')
    Klusser bewerken
@endsection

@section('link')
    <a href="/admin?slide=1" class="text-orange-100">{!! file_get_contents('icons/exit.svg') !!}</a>
@endsection

<div class="mx-4 flex flex-col space-y-12 mb-8">

    <livewire:admin.employee.admin-employee-details :employeeId="$employeeId" />

    <livewire:admin.employee.admin-employee-user :employeeId="$employeeId" />

    <livewire:admin.employee.admin-employee-jobs :employeeId="$employeeId" />

    @if ($hasUser) <livewire:admin.employee.admin-employee-minmat :employeeId="$employeeId" /> @endif

    <livewire:admin.employee.admin-employee-delete :employeeId="$employeeId" />
</div>
