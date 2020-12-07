<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Minute;
use Illuminate\Support\Facades\DB;

class SingleCurrentJob extends Component
{
    public $job;

    public $minutes;

    public $active;

    public function mount()
    {
        $minute = DB::table('minutes')->where([['job_id', '=', $this->job->id], ['stopped', '=', 1]])->select('total')->get();
        $totalSec = $minute->sum('total');
        $this->minutes = round($totalSec / 60);

        // get all records with $id
        $minute = Minute::where('stopped', '=', '0')->get();

        // Check if timer is still running
        if (isset($minute[0]['id'])) {
            $this->active = True;
        } else {
            $this->active = False;
        }
    }
    
    public function render()
    {
        return view('livewire.single-current-job');
    }
}
