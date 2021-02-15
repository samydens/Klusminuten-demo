<div class="space-y-4">

    <x-regheader>Status</x-regheader>

    <select wire:model.lazy="job.status" class="border-b-2 border-orange-100 w-full">
        <option value="0">nog niet afgerond</option>
        <option value="1">afgerond (in archief)</option>
    </select>

    @if(session()->has('message')) <span class="text-orange-100 text-sm">{{ session('message') }}</span> @endif

</div>
