<div>

    @include('livewire.admin-inc.search')

    <div class="flex flex-col space-y-2 text-gray-500">

        <x-admin-message />

        @each('livewire.admin-inc.klant', $clients, 'client', 'livewire.admin-inc.no-results')

    </div>

</div>
