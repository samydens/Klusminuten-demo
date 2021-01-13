{{-- Choose Client --}}
<div class="bg-white rounded-xl shadow p-4 mx-4 text-gray-500">

    {{-- Form title --}}
    <p class="font-ubuntu font-bold text-xl">Klant</p>
    
    {{-- Step count --}}
    <p class="text-gray-300">Stap {{$step + 1}}</p>
    
    {{-- Choose customer --}}
    <div class="mt-8">
        <label for="customer" class="text-sm text-gray-300">Klant:</label>
        <select wire:model.lazy="job.client_id" id="customer" class="border border-gray-400 bg-gray-200 rounded w-full p-1 max-w-">
            <option value="">Kies een klant:</option>
            @foreach ($customerIndex as $customer)
                <option value="{{$customer->id}}">{{$customer->full_name}}</option>
            @endforeach
        </select>
        @error('job.client_id') <span class="text-sm text-red">{{$message}}</span> @enderror
    </div>

    {{-- Link to new customer form --}}
    <div class="mt-4">
        <a wire:click="newClient" class="text-orange-100 font-medium mt-4"><u>voeg een klant toe</u></a>
    </div>


    {{-- Next & previous buttons --}}
    <div class="mt-8 flex flex-row space-x-4">
        <div wire:click="previousStep" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded text-center">Terug</div>
        <button type="submit" class="bg-gradient-to-tr from-orange-100 to-orange-200 p-2 w-full text-white rounded">Volgende</button>
    </div>
</div>