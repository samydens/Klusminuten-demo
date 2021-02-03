<div class="bg-white rounded-xl mx-4 shadow">
    <div class="flex space-x-4 space-y-4">

        {{-- image --}}
        <div class="rounded-l-xl h-44 bg-center bg-cover w-32" style="background-image: url('/storage/{{ $job->photo }}')"></div>

        <div>

            {{-- title & location --}}
            <x-regheader>{{ $job->title }}</x-regheader>
            <p class="text-gray-300 text-sm">{{ $location }}</p>

            {{-- Minutes --}}
            <div class="flex items-center space-x-4 mt-4">
                <div>
                    <p class="text-xs text-gray-300">Gekluste minuten</p>
                    <p class="text-orange-100 font-bold">{{ $this->minutes() }}</p>
                </div>

                <div class="bg-gradient-to-tr from-gray-600 to-gray-700 rounded-full w-12 h-12 flex items-center justify-center">
                    <button class="text-orange-100">{!! file_get_contents('icons/play.svg') !!}</button>
                </div>
            </div>
            
            {{-- More link --}}
            <a href="#" class="font-bold text-orange-100 float-right mt-4 text-sm"><u>Meer info</u></a>
        </div>

    </div>
</div> 
