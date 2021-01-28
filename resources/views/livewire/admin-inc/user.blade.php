<a href="/admin/user/{{ $user->id }}">
    <x-widget>
        <div class="flex justify-between items-center">
            <p class="font-bold text-xl">{{ $user->name }}</p>
            <p class="text-orange-100">{!! file_get_contents('icons/edit.svg') !!}</p>
        </div>
    </x-widget>
</a>