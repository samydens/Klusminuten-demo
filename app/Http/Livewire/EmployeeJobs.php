<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use App\Models\Employee;

class EmployeeJobs extends Component
{
    public $jobs;
    public $employees;
    public $selectedEmployee;
    public $selectedJob;
    public $jobId;
    public $employeeId;

    public function mount()
    {
        // Get all jobs, sort by date desc.
        $this->jobs = Job::all()->sortByDesc('created_at');

        // Get all employees.
        $this->employees = Employee::all();
    }

    public function submit()
    {
        // Assign variables.
        $employee = $this->selectedEmployee;
        $job = $this->selectedJob;

        // execute attachRelation.
        $this->attachRelation($employee, $job);

        // Unset variables.
        $this->selectedJob = '';
        $this->selectedEmployee = '';
    }
    
    public function attachRelation($employeeId, $jobId)
    {
        // Find job using id.
        $job = Job::find($jobId);

        // Attach job and employee.
        $job->employees()->attach($employeeId);
    }
    
    public function detachRelation($jobId, $employeeId)
    {
        // Find job using id.
        $job = Job::find($jobId);

        // Detach job and employee.
        $job->employees()->detach($employeeId);
    }

    public function render()
    {
        return view('livewire.employee-jobs')
        ->extends('layouts.admin')
        ->section('content');
    }
}
