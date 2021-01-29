@section('title')
<div class="w-screen flex p-4" style="margin-top: -1rem;">
    {{-- Return icon --}}
    <a class="absolute" href="/archief"><svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" height="36" viewBox="0 0 24 24" width="36"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21v-2z"/></svg></a>
    {{-- View title --}}
    <p class="font-ubuntu font-bold text-2xl text-white mx-auto">Overzicht</p>
</div>
@endsection
<div class="relative">
    <x-widget>
        <div class="rounded-xl w-full h-36 bg-center bg-cover" style="background-image: url('/storage/{{ $job->photo }}')"></div>
    
        <p class="font-medium text-xl my-4">{{$job->title}}</p>
    
        <p class="font-medium my-4">Totaal</p>
        <div class="flex space-x-4 text-center mb-4">
            <div class="rounded bg-gradient-to-tr from-gray-600 to-gray-700 flex-1 px-2 py-1">
                <p class="text-sm text-gray-300">minuten</p>
                <p class="font-bold">{{ $minutes }}</p>
            </div>
            <div class="rounded bg-gradient-to-tr from-gray-600 to-gray-700 flex-1 px-2 py-1">
                <p class="text-sm text-gray-300">materiaal</p>
                <p class="font-bold">{{ $materials }}</p>    
            </div>
        </div>
    
        <p class="font-medium my-4">Per werknemer</p>
        @foreach ($job->employees as $employee)    
            <div class="flex justify-between mb-4">
                <div class="flex items-center">
                    <p class="text-orange-100">{!! file_get_contents('icons/time.svg') !!}</p>
                    <p class="ml-2">{{ $employee->name }}</p>
                </div>
                <div class="bg-gradient-to-tr from-gray-600 to-gray-700 p-1 rounded">
                    <p class="text-sm font-medium">{{ $this->getMinByEmployee($employee->user->id) }} Min</p>
                </div>
            </div>
        @endforeach
    </x-widget>
</div>
