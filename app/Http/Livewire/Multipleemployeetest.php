<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Employee;
use App\Models\Job;

class Multipleemployeetest extends Component
{
    public $employees;
    public $werknemers;
    public $fields;
    public $selectedEmployees = [];
    public $jobId;
    public $jobs;

    public function mount()
    {
        $this->employees = Employee::all()->sortByDesc('updated_at');
        $this->fields = 0;
        $this->jobs = Job::all()->sortByDesc('updated_at');
    }

    public function updatedjobId()
    {
        // If a job is select, automatically make new employee field.
        if ($this->fields < 1) {
            $this->fields = 1;
        }   
    }

    public function submit()
    {
        $job = Job::find($this->jobId);

        foreach ($this->selectedEmployees as $employee) {
            $job->employees()->attach($employee);
        }

        $this->fields = 0;
        $this->selectEmployees = '';
    }

    public function addField()
    {
        $this->fields++;
    }

    public function deleteField()
    {
        // Delete value of field.
        $this->selectedEmployees[$this->fields - 1] = '';
        
        // Decrease field count.
        $this->fields--;
    }

    public function render()
    {
        return view('livewire.multipleemployeetest')
        ->extends('layouts.admin')
        ->section('content');
    }
}
