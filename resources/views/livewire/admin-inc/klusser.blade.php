<a href="/admin/employee/{{ $employee->id }}">
    <x-widget>
        <div class="flex flex-row justify-between items-center">
            <p class="font-bold text-xl">{{ $employee->name }}</p>
            {{-- <button wire:click="deleteEmployee({{ $employee->id }})" class="text-orange-100 ml-2">{!! file_get_contents('icons/delete.svg') !!}</button> --}}
            <p class="text-orange-100">{!! file_get_contents('icons/edit.svg') !!}</p>
        </div>
    </x-widget>
</a>