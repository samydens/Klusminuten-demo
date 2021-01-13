<div class="bg-white rounded-xl p-4 shadow m-4">
    @foreach ($employees as $employee)
    <div class="flex flex-row justify-between">
        <p>{{$employee->name}}</p>
        <button wire:click="deleteEmployee({{$employee->id}})" class="text-red text-sm">
            Verwijderen
        </button>
    </div>
    @endforeach
</div>
