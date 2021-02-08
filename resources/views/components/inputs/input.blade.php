<div>
    <label for=""></label>
    <input type="text">
    @error('{{ $attributes->whereStartsWith('wire:model') }}') {{ $message }} @enderror
</div>