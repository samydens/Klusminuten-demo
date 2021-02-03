<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
use App\Models\Job;
use App\Models\Employee;

class AdminJobEmployees extends Component
{
    public $jobId;
    public $employees;
    public $allEmployees;
    public $newEmployee = False;
    public $newEmployeeId;

    public function mount($jobId)
    {
        // Public $jobId is passed jobId.
        $this->jobId = $jobId;
        
        // Public employees is employees attached to job.
        $this->employees = Job::find($jobId)->employees;

        // All employees
        $this->allEmployees = Employee::all();
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

    public function submit()
    {
        // Find job with jobId.
        $job = Job::find($this->jobId);
        
        // Attach new employee to job.
        $job->employees()->attach($this->newEmployeeId);

        // Reset propeties.
        $this->newEmployeeId = False;
        $this->newEmployee = '';
        
        // Refresh employees.
        $this->employees = $job->employees;
    }

    public function render()
    {
        return view('livewire.admin.job.admin-job-employees');
    }
}
