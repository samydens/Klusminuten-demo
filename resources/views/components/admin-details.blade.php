<div class="mt-16">
    {{-- Form title --}}
    <x-regheader>{{ $title }}</x-regheader>

    <form wire:submit.prevent="submit">

        {{ $slot }}

    </form>
    
</div>