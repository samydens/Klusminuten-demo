<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Minute;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Timer extends Component
{
    // ID of current database row
    public $currentId;

    // created_at timestamp
    public $startTime;

    // difference between now and startTime
    public $currentDiff;

    // id of the job this component adds minutes to
    public $jobId;

    // boolean, if true you can edit the session minutes
    public $edit;

    // This is updated by the edit minutes input field
    public $editedMinutes;

    public $sessionMinutes;

    public function mount($id) 
    {
        // Set passed id var to public id far for further use within component.
        $this->jobId = $id;

        // get all records with $id
        $minute = Minute::where([['stopped', '=', '0'], ['job_id', '=', $this->jobId]])->get();

        // Check if there are records which aren't stopped. If so, resume timer.
        if (isset($minute[0]['id'])) {
            $this->currentId = $minute[0]['id'];
            $this->startTime = $minute[0]['created_at'];
        }
    }

    public function startTimer() 
    {
        // Start a new timer
        $minute = new Minute;
        $minute->user_id = Auth::id();
        $minute->job_id = $this->jobId;
        $minute->save();

        // Set currentId to id of last inserted row, set startTime to created_at of the last inserted row
        $this->currentId = $minute->id;
        $this->startTime = $minute->created_at;
    }

    public function getTimePassed() 
    {
        // Check if active, return diff between now and when timer started
        if ($this->currentId != NULL) {
            return $this->currentDiff = $this->startTime->diffInMinutes(Carbon::now());
        }
    }

    public function getTotalMin() 
    {
        // Get all seconds which have the correct job id and are stopped.
        $minute = DB::table('minutes')->where([['job_id', '=', $this->jobId], ['stopped', '=', 1]])->select('total')->get();
        $totalSec = $minute->sum('total');

        // returned rounded minutes
        return round($totalSec / 60);
    }

    public function stopTimer() 
    {
        // Save the difference between 'created_at' and 'updated_at' as total (seconds) in minutes table.
        $minute = Minute::find($this->currentId);
        $minute->total = $minute->updated_at->floatDiffInSeconds($minute->created_at);
        $minute->save();

        // Set both currentId and startTime to NULL
        $this->currentId = NULL;
        $this->startTime = NULL;
    }

    public function edit()
    {
        $this->edit = True;
    }

    public function submitEdit()
    {
        $this->edit = False;
    }

    public function pauseTimer()
    {
        // Set stopped to 1, this action automatically updates the 'updated_at' column in our database.
        $minute = Minute::find($this->currentId);
        $minute->stopped = 1;
        $minute->save();
    }

    public function render()
    {
        return view('livewire.timer')
        ->extends('klusminuten.layout.timer')
        ->section('content');
    }
}
