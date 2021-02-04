<div {{ $attributes->merge(['class' => 'bg-white shadow p-4 rounded-xl']) }}>
    @if ($attributes->has('title'))
        <p class="font-bold text-lg">{{ $attributes->get('title') }}</p>
    @endif
    {{ $slot }}
</div>