<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Job;

class AdminEmployeeJobs extends Component
{
    public $employee;
    public $jobs;
    public $allJobs;
    public $newJob = False;
    public $newJobId;

    public function mount($employeeId)
    {
        // Public $employeeId is passed EmployeeId.
        $employee = Employee::find($employeeId);

        // Public jobs is jobs attached to employee.
        $this->jobs = $employee->jobs;

        // All jobs.
        $this->allJobs = Job::all();

        $this->employee = $employee;
    }

    public function detachJob($id)
    {
        // Detach the job from the employee.
        $this->employee->jobs()->detach($id);

        $this->refreshJobs();
    }

    public function submit()
    {
        $this->employee->jobs()->attach($this->newJobId);
        
        $this->reset('newJob');
        $this->reset('newJobId');

        $this->refreshJobs();
    }

    public function refreshJobs()
    {
        $this->jobs = Employee::find($this->employee->id)->jobs;
    }

    public function render()
    {
        return view('livewire.admin-employee-jobs');
    }
}
