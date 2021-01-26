<div class="flex flex-col space-y-8">
    <x-regheader>Klussen</x-regheader>

    {{-- Foreach with employees --}}
    <div class="flex flex-col space-y-2">
        @each('livewire.admin-inc.client-jobs', $jobs, 'job', 'livewire.admin-inc.no-jobs')
    </div>
</div>
