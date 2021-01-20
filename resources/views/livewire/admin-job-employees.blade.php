<div class="flex flex-col space-y-8">
        
    {{-- Header --}}
    <div class="flex justify-between items-center">
        <x-regheader>Klussers:</x-regheader>
        <a href="" class="text-orange-100">{!! file_get_contents('icons/plus.svg') !!}</a>
    </div>

    {{-- Foreach with employees --}}
    <div class="flex flex-col space-y-2">
        @each('livewire.admin-inc.employees', $employees, 'employee', 'livewire.admin-inc.no-employees')
    </div>

</div>
