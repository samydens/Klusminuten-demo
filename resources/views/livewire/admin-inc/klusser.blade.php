<x-widget>
    <div class="flex justify-between items-center">
        <p class="font-bold text-xl">{{ $employee->name }}</p>
        {!! file_get_contents('icons/edit.svg') !!}
    </div>
</x-widget>