@section('title')
    Klusvijver
@endsection

<div class="relative bg-white rounded-xl p-4 shadow text-gray-300">
    <p class="font-bold text-gray-500">Welkom bij de klusvijver</p>
    <p class="text-sm mr-4">Hier kan je alle klussen bekijken.</p>
    <div class="mt-6 text-white font-par font-medium font-lg">
        <button wire:click="redirectToArchive" class="bg-gradient-to-tr from-orange-100 to-orange-200 rounded-xl shadow p-3">Bekijk archief</button>
    </div> 
</div>
<div class="space-y-2 mt-4">
@if ($jobs->isEmpty())
    {{-- Message for when the archive is empty --}}
    <p class="w-full text-center mt-40 text-gray-300 text-xl">Geen klussen in klusvijver <br /> :(</p>
@endif
@foreach ($jobs as $job)
    <a href="/klusvijver/{{$job->id}}" class="relative bg-white rounded-xl p-2 shadow text-gray-300 flex items-center space-x-4">  
        <div class="rounded-xl w-20 h-16 bg-center bg-cover" style="background-image: url('/img/bathroom.jpg')"></div>
        <div>
            <p class="font-bold text-gray-500">{{$job->title}}</p>
            <p class="text-sm">{{$job->agr_minutes}} min | € {{$job->agr_material}}</p>
        </div>
    </a>
@endforeach
</div>
