@section('title' ,'Klus Archief')

@section('icon')
    <a href="/klusvijver">{!! file_get_contents('icons/exit.svg') !!}</a>
@endsection

@section('content')
    <div class="space-y-2">
        @forelse ($jobs as $job)
            <a href="/klusvijver/{{$job->id}}" class="relative bg-white rounded-xl p-2 shadow text-gray-300 flex items-center space-x-4">  
                <div class="rounded-xl w-20 h-16 bg-center bg-cover" style="background-image: url('/storage/{{$job->photo}}')"></div>
                <div>
                    <p class="font-bold text-gray-500">{{$job->title}}</p>
                    <p class="text-sm">{{$job->agr_minutes}} min | € {{$job->agr_material}}</p>
                </div>
            </a>
        @empty
            <p class="w-full text-center mt-40 text-gray-300 text-xl">Geen klussen in archief <br /> :(</p>
        @endforeach
    </div>
@endsection