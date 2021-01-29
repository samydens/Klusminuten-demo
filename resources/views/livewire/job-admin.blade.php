<div class="flex flex-col space-y-8 text-gray-500">
    <x-admin-message />
    @foreach ($allJobs as $status => $jobs)
        <div class="flex flex-col space-y-2">
            <p class="text-sm text-gray-300 mx-2">{{ $statuses[$status] }}</p>
            @each('livewire.admin-inc.klus', $jobs, 'job', 'livewire.admin-inc.empty')
        </div>
    @endforeach
</div>
