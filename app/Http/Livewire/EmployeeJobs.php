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
        $this->jobs = Job::all()->sortByDesc('created_at');
        $this->employees = Employee::all();
    }

    public function submit()
    {
        $employee = $this->selectedEmployee;
        $job = $this->selectedJob;

        $this->attachRelation($employee, $job);
    }
    
    public function attachRelation($employeeId, $jobId)
    {
        $job = Job::find($jobId);
        $job->employees()->attach($employeeId);
    }
    
    public function detachRelation($jobId, $employeeId)
    {
        $job = Job::find($jobId);
        $job->employees()->detach($employeeId);
    }

    public function deleteRelation()
    {
        $job = Job::find($this->jobId);
        $job->employees()->detach($this->employeeId);
    }

    public function render()
    {
        return view('livewire.employee-jobs')
        ->extends('layouts.admin')
        ->section('content');
    }
}
