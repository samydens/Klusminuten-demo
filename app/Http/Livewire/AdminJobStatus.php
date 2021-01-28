<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class AdminJobStatus extends Component
{
    public $edited = False; // Gets set to true by edit button.
    public $currentStatus; // Model propety for form.
    public $job; // DB record of job in question. 

    public function mount($jobId)
    {
        $this->job = Job::find($jobId);

        // Set input model to jobs status.
        $this->currentStatus = $this->job->status;
    }

    public function submit()
    {
        // Set job status to status chosen by user.
        $this->job->status = $this->currentStatus;
        $this->job->save();

        $this->reset('edited');
    }

    public function updatedcurrentStatus()
    {
        $this->edited = True;
    }

    public function render()
    {
        return view('livewire.admin-job-status');
    }
}
