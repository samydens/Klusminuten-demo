{{-- Project card --}}
<div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
    {{-- Project image --}}
    <div class="rounded-xl w-full h-36 bg-center bg-cover" style="background-image: url('/img/bathroom.jpg')"></div>
    {{-- Project title --}}
    <div class="my-4">
        <p class="text-xs">Huidige project</p>
        <p class="font-medium text-xl text-gray-500">{{$job->title}}</p>
    </div>
    {{-- Project stats --}}
    <div class="flex space-x-4 text-center">
        <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
            <p class="text-xs">Minuten</p>
            <p class="font-medium text-gray-500">{{$job->agr_minutes}}</p>
        </div>
        <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
            <p class="text-xs">Materiaal</p>
            <p class="font-medium text-gray-500">€ {{$job->agr_material}}</p>
        </div>
        <div class="flex-1 bg-gradient-to-tr from-gray-600 to-gray-700 px-2 py-1 rounded">
            <p class="text-xs">Locatie</p>
            <p class="font-medium text-gray-500">{{$job->location}}</p>
        </div>
    </div>
</div>
