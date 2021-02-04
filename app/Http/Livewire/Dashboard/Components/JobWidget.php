<?php

namespace App\Http\Livewire\Dashboard\Components;

use Livewire\Component;
use App\Models\Job;
use App\Models\Minute;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class JobWidget extends Component
{
    public $job;
    public $location;
    public $running = False;
    public $minute;

    public function mount($job)
    {
        // Get job
        $this->job = $job;

        // Get location
        if ($job->clients) {
            $this->location = $job->clients->first()->adres.', '.$job->clients->first()->city;
        }

        // Try to resume timer.
        $min = Minute::where([['user_id', Auth::id()], ['running', 1], ['job_id', $job->id]])->first();

        // If there's an active record, 'resume' timer.
        if (!empty($min)) {
            $this->minute = $min;
            $this->running = True;
        }
    }

    public function getMinutes()
    {
        $totalMin = Job::find($this->job->id)->minutes->sum('total');

        if ($this->running) {
            return $this->convertToMin($totalMin + $this->minute->start_time->diffInSeconds(Carbon::now()));
        } else {
            return $this->convertToMin($totalMin);
        }
    }

    public function startTimer()
    {
        $minute = new Minute;
        $minute->user_id = Auth::id();
        $minute->job_id = $this->job->id;
        $minute->start_time = Carbon::now();
        $minute->running = 1;
        $minute->save();

        $this->running = True;
        $this->minute = $minute;
    }

    public function stopTimer()
    {
        $this->minute->stop_time = Carbon::now();
        $this->minute->total = $this->minute->start_time->diffInSeconds($this->minute->stop_time);
        $this->minute->running = 0;
        $this->minute->save();

        $this->running = False;
    }

    public function convertToMin($seconds)
    {
        return floor($seconds / 60) . ' min en ' . ($seconds % 60) . ' sec';
    }

    public function render()
    {
        return view('livewire.dashboard.components.job-widget');
    }
}
