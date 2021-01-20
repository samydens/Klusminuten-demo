<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class AdminJobEmployees extends Component
{
    public $jobId;
    public $employees;

    public function mount($jobId)
    {
        // Public $jobId is passed jobId.
        $this->jobId = $jobId;
        
        // Public employees is employees attached to job.
        $this->employees = Job::find($jobId)->employees;
    }

    public function detachEmployee($id)
    {
        // Find job to detach employee from.
        $job = Job::find($this->jobId);

        // Detach the employee from the job.
        $job->employees()->detach($id);
        
        // Refresh employees.
        $this->employees = $job->employees;
    }

    public function render()
    {
        return view('livewire.admin-job-employees');
    }
}
