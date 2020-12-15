@section('title')
    <a href="{{ url()->previous() }}"><svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21v-2z"/></svg></a>
@endsection

<div class="space-y-4 mb-40">
    {{-- Project card --}}
    <div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
        {{-- Project image --}}
        <div class="rounded-xl w-full h-36 bg-center bg-cover" style="background-image: url('/img/bathroom.jpg')"></div>
        {{-- Project title --}}
        <p class="my-4 font-medium text-xl text-gray-500">{{$job->title}}</p>
        {{-- Project stats --}}
        <div class="flex space-x-4 text-center">
            <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                <p class="text-xs">Minuten</p>
                <p class="font-medium text-gray-500">{{$job->agr_minutes}}</p>
            </div>
            <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                <p class="text-xs">Materiaal</p>
                <p class="font-medium text-gray-500">{{$job->agr_material}}</p>
            </div>
            <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
                <p class="text-xs">Locatie</p>
                <p class="font-medium text-gray-500">{{$job->location}}</p>
            </div>
        </div>
    </div>
    <div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
        <p class="font-medium text-gray-500">Omschrijving</p>
        <p>{{$job->desc}}</p>
    </div>
    <div class="mt-3 text-white font-par font-medium font-lg">
        <button wire:click="setActive({{$job->id}})" class="bg-gradient-to-tr from-orange-100 to-orange-200 rounded-xl shadow p-4 w-full">Klus starten</button>
    </div>  
</div>
