<a href="/admin/role/{{ $role->id }}" class="bg-white rounded shadow mx-2 p-4 flex flex-row justify-between items-center">
    <p class="font-bold text-lg">{{ $role->name }}</p>
    <p class="text-orange-100">{!! file_get_contents('icons/edit.svg') !!}</p>
</a>