<x-widget>
    <div class="flex justify-between items-center">
        <p class="font-bold text-xl">{{ $employee->name }}</p>
        <a href="/admin/employee/{{ $employee->id }}">{!! file_get_contents('icons/edit.svg') !!}</a> 
    </div>
</x-widget>