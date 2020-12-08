<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Minute;
use App\Models\Job;
use Illuminate\Support\Facades\DB;

class SingleCurrentJob extends Component
{
    public $job;

    public $minutes;

    public $active;

    public function mount($id)
    {
        $minute = DB::table('minutes')->where([['job_id', '=', $id], ['stopped', '=', 1]])->select('total')->get();
        $totalSec = $minute->sum('total');
        $this->minutes = round($totalSec / 60);

        // get all records with $id
        $minute = Minute::where([['stopped', '=', '0'], ['job_id', '=', $id]])->get();

        // Check if timer is still running
        if (isset($minute[0]['id'])) {
            $this->active = True;
        } else {
            $this->active = False;
        }
    }

    public function completeJob($id)
    {
        $job = Job::find($id);
        $job->completed = 1;
        $job->active = 0;
        $job->save();
    }
    
    public function render()
    {
        return view('livewire.single-current-job');
    }
}
