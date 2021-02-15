<x-admin-details title="Details">
        
    <x-inputs.input id="title" label="titel:" wire:model.lazy="job.title" placeholder="typ hier uw titel" />
    @error('job.title') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    <div class="mt-4">
        <label for="desc" class="text-sm text-gray-300">beschrijving:<br></label>
        <textarea wire:model.lazy="job.desc" id="desc" cols="30" rows="5" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="typ hier de beschrijving"></textarea>
        @error('job.desc') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    <x-inputs.input wire:model.lazy="job.agr_minutes" id="agr_minutes" label="Afgesproken minuten:" placeholder="Afgesproken klusminuten" />
    @error('job.agr_minutes') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    <x-inputs.input wire:model.lazy="job.agr_material" id="agr_material" label="Afgesproken materiaalkosten:" placeholder="Afgesproken materiaalkosten" />
    @error('job.agr_material') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    @if (session()->has('message')) <span class="text-orange-100 text-sm"> {{ session('message') }} </span> @endif

</x-admin-details>
