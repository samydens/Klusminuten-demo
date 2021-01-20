<div>

    <div class="bg-white shadow p-4 pr-0 mb-4 rounded-2xl text-gray-500">

        @if (!empty($activeJobs))
            <div>
                <p class="font-ubuntu font-bold text-xl my-4">Active klussen</p>
                <div class="flex flex-row overflow-x-scroll space-x-4">
                    @each('livewire.admin-inc.job', $activeJobs, 'job', 'livewire.admin-inc.empty')
                </div>
            </div>
        @endif

        @if (!empty($klusvijver))
            <div>
                <p class="font-ubuntu font-bold text-xl my-4">Klusvijver</p>
                <div class="flex flex-row overflow-x-scroll space-x-4">
                    @each('livewire.admin-inc.job', $klusvijver, 'job', 'livewire.admin-inc.empty')
                </div>
            </div>
        @endif

        @if (!empty($archive))
            <div>
                <p class="font-ubuntu font-bold text-xl my-4">Archief</p>
                <div class="flex flex-row overflow-x-scroll space-x-4">
                    @each('livewire.admin-inc.job', $archive, 'job', 'livewire.admin-inc.empty')
                </div>
            </div>
        @endif
    
    </div>

</div>
