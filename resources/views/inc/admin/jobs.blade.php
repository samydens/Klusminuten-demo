<div class="flex justify-between items-center">
    <div class="flex items-center">
        <p class="text-orange-100 mr-2">{!! file_get_contents('icons/handyman.svg') !!}</p>
        <p>{{ $job->title }}</p>
    </div>
    <p wire:click="detachJob({{$job->id}})" class="text-orange-100">{!! file_get_contents('icons/min.svg') !!}</p>
</div>