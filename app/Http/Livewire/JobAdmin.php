<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use App\Models\Minute;
use App\Models\Material;

class JobAdmin extends Component
{
    public $allJobs;
    public $jobs;
    public $status;
    public $statuses = [
        'Nog niet begonnen',
        'In uitvoering',
        'Afgerond',
        'Factuur verzonden',
        'Factuur betaald',
    ];

    public function mount()
    {
        // Get all jobs from db and sort them according to updated_at (descending)
        $this->allJobs = Job::all()->sortByDesc('updated_at');
        $this->jobs = $this->allJobs;
    }

    public function updated($status)
    {
        $this->jobs = $this->allJobs->where('status', '=', $this->status);

        if ($this->status == 5) {
            $this->jobs = $this->allJobs;
        }
    }

    public function render()
    {
        return view('livewire.admin.job-admin')
        ->extends('layouts.admin')
        ->section('content');
    }    
}
