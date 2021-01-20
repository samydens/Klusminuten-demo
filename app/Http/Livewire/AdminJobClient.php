<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class AdminJobClient extends Component
{
    public $jobId;
    public $client;

    public function mount($jobId)
    {
        // Get client from job.
        $this->client = Job::find($jobId)->client;
        
        // Public $jobId is passed $jobId;
        $this->jobId = $jobId;
    }

    public function render()
    {
        return view('livewire.admin-job-client');
    }
}
