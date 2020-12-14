<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class JobAdmin extends Component
{
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
        // Jobs is all jobs
        $this->jobs = Job::all();
    }

    public function updated($status)
    {
        // Select jobs by status
        $this->jobs = Job::where('status', '=', $this->status)->get();

        // If status is 5 set job to all jobs
        if ($this->status == 5) {
            $this->jobs = Job::all();
        }
    }

    public function render()
    {
        return view('livewire.job-admin')
        ->extends('klusminuten.layout.admin')
        ->section('content');
    }    
}
