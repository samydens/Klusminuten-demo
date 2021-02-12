<div class="mt-4">
    <label {{ $id }} class="text-gray-300 text-sm">{{ $label }}<br /></label>
    <input id="{{ $id }}" {{ $attributes->merge(['type' => 'text']) }} {{ $attributes->whereStartsWith('wire:model') }} placeholder="{{ $placeholder }}" class="border border-gray-400 bg-gray-200 rounded p-1 w-full">
</div>