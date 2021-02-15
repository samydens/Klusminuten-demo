<div class="text-gray-500 font-roboto h-screen overflow-y-hidden">
    
    {{-- Header --}}
    <div class="bg-white w-100 px-28 py-8">
        <img src="/storage/logo/klusmin.png" alt="Klusminuten logo">
    </div>

    {{-- Search bar --}}
    <div class="pt-2 relative text-gray-300 mb-8 mx-2 mt-4">
        <input wire:model="query" class="shadow bg-white h-10 px-5 pr-16 rounded-full text-sm focus:outline-none w-full" type="search" name="search" placeholder="Zoek een bedrijf...">
        <button type="submit" class="absolute right-0 top-0 mt-5 mr-4">
            <svg class="text-orange-100 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
            </svg>
        </button>
    </div>

    {{-- Foreach with results --}}
    @foreach ($companies as $company)
        <a wire:click="setCompany({{ $company->id }})" class="mx-2 mb-2 p-4 rounded bg-white shadow flex justify-between items-center">
            <x-regheader>{{ $company->name }}</x-regheader>
            <i class="text-orange-100">{!! file_get_contents('icons/next.svg') !!}</i>
        </a>
    @endforeach

</div>
