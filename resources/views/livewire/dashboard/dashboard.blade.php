@section('title', 'Dashboard')

@section('icon')
    @can('access admin')
        <a href="/admin">{!! file_get_contents('icons/admin.svg') !!}</a>
    @endcan
@endsection

<div class="space-y-4">
    
    @if (session()->has('message'))
    <x-message>
        {{ session('message') }}
    </x-message>
    @endif

    @forelse ($jobs as $job)
        <livewire:dashboard.components.job-widget :job="$job" :key="$job->id" />
    @empty
        <x-widget title="Geen aangenomen klussen">
            <p class="text-gray-300 mt-4">Kijk in de <a href="/klusvijver" class="underline text-orange-100">klusvijver</a> voor beschikbare klussen</p>
        </x-widget>
    @endforelse
        
</div>

