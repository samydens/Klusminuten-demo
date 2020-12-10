<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Minute;

class EditTimer extends Component
{
    // ID of the job
    public $jobId;

    public function mount($id)
    {
        $this->jobId = $id;
    }

    public function getTimeRecords()
    {
        return Minute::where('job_id', '=', $this->jobId)->get();
    }

    public function getTimePassed()
    {

    }

    public function getTotalMin()
    {
        
    }

    public function submit()
    {
        //
    }

    public function render()
    {
        return view('livewire.edit-timer')
        ->extends('klusminuten.layout.timer');
    }
}
