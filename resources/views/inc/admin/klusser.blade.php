<a href="/admin/employee/{{ $employee->id }}" class="bg-white rounded shadow mx-2 p-4 flex flex-row justify-between items-center">
    <p class="font-bold text-lg">{{ $employee->name }}</p>
    <p class="text-orange-100">{!! file_get_contents('icons/edit.svg') !!}</p>
</a>