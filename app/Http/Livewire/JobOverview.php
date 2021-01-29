<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use App\Models\Minute;
use App\Models\Material;
use App\Models\Employee;

class JobOverview extends Component
{
    public $job;
    public $minutes;
    public $materials;

    public function mount($id)
    {
        $this->job = Job::find($id);
        
        $this->minutes = round(
            Minute::where('job_id', $id)
            ->select('total')
            ->get()
            ->sum('total') / 60
        );

        $this->materials = number_format(
            Material::where('job_id', $id)
            ->select('amount')
            ->get()
            ->sum('amount'), 2, ',', '.'
        );
    }

    public function getMinByEmployee($id)
    {
        return round(
            Minute::where([
                ['user_id', $id], 
                ['job_id', $this->job->id]
            ])
            ->select('total')
            ->get()
            ->sum('total') / 60
        );
    }

    public function render()
    {
        return view('livewire.job-overview')
        ->extends('layouts.main')
        ->section('content');
    }
}
