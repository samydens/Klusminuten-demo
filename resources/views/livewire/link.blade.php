<div class="mt-3 items-center justify-between flex text-gray-500 bg-white relative rounded-xl p-4 shadow">
    <p class="font-par font-medium text-xl text-kmtitel relative">{{$title}}</p>
    <div class="flex items-center">
        <a href="{{$link}}">
            <div class="rounded-full bg-gradient-to-tr from-gray-600 to-gray-700 p-3">
                {!! file_get_contents('icons/next.svg') !!}
            </div>
        </a>
    </div>
</div>
