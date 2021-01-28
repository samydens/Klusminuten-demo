<x-admin-details title="Details:">
        
    {{-- Job title --}}
    <x-input id="title" label="titel:" type="text" prop="job.title" placeholder="typ hier uw titel" />
    @error('job.title') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    {{-- Job description --}}
    <div class="mt-4">
        <label for="desc" class="text-sm text-gray-300">beschrijving:<br></label>
        <textarea wire:model.lazy="job.desc" id="desc" cols="30" rows="5" class="border border-gray-400 bg-gray-200 rounded w-full p-1" placeholder="typ hier de beschrijving"></textarea>
        @error('job.desc') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    {{-- Agreed minutes --}}
    <x-input id="agr_minutes" label="Afgesproken minuten:" type="text" prop="job.agr_minutes" placeholder="Afgesproken klusminuten" />
    @error('job.agr_minutes') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    {{-- Agreed material --}}
    <x-input id="agr_minutes" label="Afgesproken materiaalkosten:" type="text" prop="job.agr_material" placeholder="Afgesproken materiaalkosten" />
    @error('job.agr_material') <span class="text-red text-sm"> {{ $message }} </span> @enderror

    @if ($showSubmit)
        {{-- Submit --}}
        <div class="mt-8 w-full text-center">
            <button type="submit" class="px-4 py-2 bg-gradient-to-tr from-orange-100 to-orange-200 text-white rounded-full">Wijzigingen opslaan</button>
        </div>
    @endif

    @if (session()->has('message'))
        <div class="text-center mt-4">
            <span class="text-orange-100 text-sm"> {{ session('message') }} </span>
        </div>
    @endif

</x-admin-details>
