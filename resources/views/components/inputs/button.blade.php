<button {{ $attributes->merge(['class' => 'bg-gradient-to-tr from-orange-100 to-orange-200 rounded-xl py-4 w-full text-white font-medium text-lg']) }} {{ $attributes->whereStartsWith('wire:click') }}>
    {{ $title }}
</button>