<a href="/admin/job/{{ $job->id }}">
    <div class="rounded-xl h-48 w-36 bg-cover bg-center" style="background-image: url('/storage/{{ $job->photo }}')"></div>
    <p class="my-2 font-bold">{{ $job->title }}</p>
</a>