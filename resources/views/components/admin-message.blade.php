@if (session()->has('message'))
    <div class="bg-white shadow rounded mx-2 p-4">
        <p class="text-orange-100">{{ session('message') }}</p>
    </div>
@endif