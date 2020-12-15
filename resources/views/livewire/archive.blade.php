@section('title')
    <div class="w-screen flex p-4" style="margin-top: -1rem;">
        {{-- Return icon --}}
        <a class="absolute" href="/klusvijver"><svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21v-2z"/></svg></a>
        {{-- View title --}}
        <p class="font-ubuntu font-bold text-2xl text-white mx-auto">Klus archief</p>
    </div>
@endsection
@section('content')
    <div class="space-y-2 mt-4 w-80 mx-auto">
        @if ($jobs->isEmpty())
            {{-- Message for when the archive is empty --}}
            <p class="w-full text-center mt-40 text-gray-300 text-xl">Geen klussen in archief <br /> :(</p>
        @endif
        @foreach ($jobs as $job)
            {{-- Clickable card with title, agreed minutes and material budget --}}
            <a href="/klusvijver/{{$job->id}}" class="relative bg-white rounded-xl p-2 shadow text-gray-300 flex items-center space-x-4">  
                <div class="rounded-xl w-20 h-16 bg-center bg-cover" style="background-image: url('/storage/{{$job->photo}}')"></div>
                <div>
                    <p class="font-bold text-gray-500">{{$job->title}}</p>
                    <p class="text-sm">{{$job->agr_minutes}} min | € {{$job->agr_material}}</p>
                </div>
            </a>
        @endforeach
    </div>
@endsection