<?php

namespace App\Http\Livewire\Dashboard\Components;

use Livewire\Component;
use App\Models\Job;
use App\Models\Minute;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class JobWidget extends Component
{
    public $job; // Job record from DB.
    public $location; // Location (street, city).
    public $running = False; // Running. 
    public $minute; // Minute record.

    public function mount($job)
    {
        // Assign passed job to public job.
        $this->job = $job;

        // Try to resume timer.
        $min = Minute::where([['user_id', Auth::id()], ['running', 1], ['job_id', $job->id]])->first();

        // Check if minute isn't empty.
        if (!empty($min)) {

            // Assign the minute record to public minute.
            $this->minute = $min;

            // Set running to True.
            $this->running = True;
        }
    }

    public function getMinutes()
    {
        // Get total minutes from all records.
        $totalMin = Job::find($this->job->id)->minutes->sum('total');

        // If timer is running, add seconds since start of timer to total, else just totalMin.
        if ($this->running) {
            return $this->convertToMin($totalMin + $this->minute->start_time->diffInSeconds(Carbon::now()));
        } else {
            return $this->convertToMin($totalMin);
        }
    }

    public function startTimer()
    {
        // Make a new record in DB.
        $minute = new Minute;
        $minute->user_id = Auth::id();
        $minute->job_id = $this->job->id;
        $minute->start_time = Carbon::now();
        $minute->running = 1;
        $minute->save();

        // Set running to True.
        $this->running = True;

        // Assign new minute model to public minute.
        $this->minute = $minute;
    }

    public function stopTimer()
    {
        $stoptime = Carbon::now();
        
        // Set stop_time column.
        $this->minute->stop_time = $stoptime;
        
        // Calculate total from difference between start_time and now.
        $this->minute->total = $this->minute->start_time->diffInSeconds($stoptime);
        
        // Set running to 0 (false).
        $this->minute->running = 0;
        
        // Save to DB.
        $this->minute->save();

        // Reset running.
        $this->reset('running');
    }

    public function convertToMin($seconds)
    {
        // Return a sentence which tells us how much minutes and seconds have been worked on the job.
        return floor($seconds / 60) . ' min en ' . ($seconds % 60) . ' sec';
    }

    public function render()
    {
        return view('livewire.dashboard.components.job-widget');
    }
}
