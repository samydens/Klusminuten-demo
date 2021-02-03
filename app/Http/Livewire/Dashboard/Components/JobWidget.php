<?php

namespace App\Http\Livewire\Dashboard\Components;

use Livewire\Component;
use App\Models\Job;

class JobWidget extends Component
{
    public $job;
    public $location;

    public function mount($jobId)
    {
        $this->job = Job::find($jobId);
        $this->location = $this->job->clients->first()->adres.', '.$this->job->clients->first()->city;
        // $this->minutes = gmdate("H:i:s", $this->job->minutes->total->sum());
        // dd(gmdate("i:s", $this->job->minutes->sum('total')));
        $total = $this->job->minutes->sum('total');

        $minutes = floor($total / 60);
        $seconds = $total % 60;
        // dd(floor($total / 60).' min en '.$total % 60.' sec'))

        // dd($minutes.' min en '.$seconds.' sec');
        $this->minutes = $minutes;
    }

    public function minutes()
    {
        $total = $this->job->minutes->sum('total');
        $minutes = floor($total / 60);
        $seconds = $total % 60;
        return $minutes.' min en '.$seconds.' sec';
    }

    public function render()
    {
        return view('livewire.dashboard.components.job-widget');
    }
}
