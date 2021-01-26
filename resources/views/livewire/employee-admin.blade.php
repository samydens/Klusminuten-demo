@section('link')
    <a href="/admin?slide=1" class="text-orange-100">{!! file_get_contents('icons/exit.svg') !!}</a>
@endsection
<div>

    {{-- Include search bar. --}}
    @include('livewire.admin-inc.search')

    {{-- Loop trough all employees. --}}
    @each('livewire.admin-inc.klusser', $employees, 'employee', 'livewire.admin-inc.empty')

</div>
