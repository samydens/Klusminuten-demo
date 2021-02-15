<div>

    @include('inc.admin.search')
    
    <div class="flex flex-col space-y-2 text-gray-500">
        <x-admin-message />
        @each('inc.admin.klusser', $employees, 'employee', 'inc.admin.no-results')
    </div>

</div>
