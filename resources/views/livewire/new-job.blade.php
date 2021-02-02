@section('title')
    Nieuwe klus
@endsection
<div class="relative">
    <form wire:submit.prevent="submit" enctype="multipart/form-data">
        @switch($step)
            @case(0)
                @include('inc.form.step-0')
                @break
            @case(1)
                @include('inc.form.step-1')
                @break
            @case(2)
                @include('inc.form.step-2')
                @break
            @case(3)
                @include('inc.form.step-3')
                @break
            @case(4)
                @include('inc.form.step-4')
                @break
            @case(5)
                @include('inc.form.step-5')
                @break
        @endswitch
    </form>
</div>
