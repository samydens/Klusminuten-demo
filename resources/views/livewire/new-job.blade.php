@section('title')
    Nieuwe klus
@endsection
<div class="relative">
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        @switch($step)
            @case(0)
                @include('livewire.form-inc.step-0')
                @break
            @case(1)
                @include('livewire.form-inc.step-1')
                @break
            @case(2)
                @include('livewire.form-inc.step-2')
                @break
            @case(3)
                @include('livewire.form-inc.step-3')
                @break
            @case(4)
                @include('livewire.form-inc.step-4')
                @break
            @case(5)
                @include('livewire.form-inc.step-5')
                @break
        @endswitch
    </form>
</div>
