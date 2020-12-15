@section('header')
    <div class="w-screen flex p-4">
        {{-- Return icon --}}
        <a class="absolute" href="/home"><svg class="fill-current text-orange-100" xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21v-2z"/></svg></a>
        {{-- View title --}}
        <p class="font-ubuntu font-bold text-2xl text-orange-100 mx-auto">Materiaal toevoegen</p>
    </div>
@endsection
<div>
    {{-- Add new material costs form --}}
    <form wire:submit.prevent="addMaterial" class="flex flex-col mt-20 w-11/12 mx-auto space-y-4">
        {{-- Material title --}}
        <label class="text-gray-300">Titel<input wire:model.lazy="mtrl.title" type="text" class="border border-gray-400 bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        @error('mtrl.title') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        {{-- Material amount --}}
        <label class="text-gray-300">Bedrag<input wire:model.lazy="mtrl.amount" type="text" class="border border-gray-400 bg-gray-200 rounded w-full h-9 py-1 px-4"></label>
        @error('mtrl.amount') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        {{-- Material description --}}
        <label class="text-gray-300">Omschrijving<textarea wire:model.lazy="mtrl.desc" type="text" class="border border-gray-400 bg-gray-200 rounded w-full h-27 py-1 px-4"></textarea></label>
        @error('mtrl.desc') <span class="text-red text-xs">{{ $message }}</span><br> @enderror
        {{-- Submit --}}
        <button type="submit" class="p-4 w-full bg-gradient-to-tr from-orange-100 to-orange-200 rounded shadow font-medium text-white">Kosten toevoegen</button>
        {{-- Display messages --}}
        @if (session()->has('message'))
            <div class="text-orange-100 text-center">{{session('message')}}</div>
        @endif
    </form>
</div>