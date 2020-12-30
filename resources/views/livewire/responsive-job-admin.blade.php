<div class="lg:flex lg:flex-row-reverse font-roboto">
    {{-- filter form --}}
    <div class="bg-white rounded-xl shadow p-4 m-4 space-y-4 lg:w-1/5 lg:h-44">
        <p class="font-ubuntu font-bold text-xl text-gray-500">Status</p>
        <select class="border-b-2 border-orange-100">
            <option value="0">Alle klussen</option>
            <option value="1">Nog niet begonnen</option>
            <option value="2">In uitvoering</option>
            <option value="3">Afgerond</option>
            <option value="4">Factuur verzonden</option>
            <option value="5">Factuur betaald</option>
        </select>
    </div>
    {{-- All jobs --}}
    <div class="lg:w-4/5">
        {{-- Display messages --}}
        @if (session()->has('message'))
            <div class="relative bg-white text-orange-100 rounded-xl shadow p-4">{{session('message')}}</div>
        @endif  
        {{-- Single job --}}
        <div class="bg-white rounded-xl shadow p-4 m-4 flex flex-row space-x-4">
            <div class="rounded-l-xl bg-center bg-cover bg-no-repeat -my-4 -ml-4 w-48" style="background-image: url('/storage/photos/bathroom.jpg')"></div>
            <div class="w-full">
                <div class="flex justify-between items-center">
                    <p class="font-ubuntu font-bold text-xl text-gray-500">{{$job->title}}</p>
                    <p class="text-xs text-gray-300">{{$job->created_at}}</p>
                </div>
                <div class="flex flex-row justify-between">
                    <div class="flex flex-row space-x-8">
                        <div class="text-gray-300">
                            <p>Afspraken:</p>
                            <p>{{ $job->agr_minutes }} min | € {{ $job->agr_material }}</p>
                            <p class="text-orange-100">status</p>
                        </div>
                        <div class="hidden xl:block text-gray-300">
                            <p>Realisatie:</p>
                            <p>20 min | € 250</p>
                        </div>
                    </div>
                    <a href="/admin/klus" class="self-end">{!! file_get_contents('icons/edit.svg') !!}</a>
                </div>
            </div>
        </div>
    </div>
</div>
