<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use App\Models\Minute;
use App\Models\Material;

class ResponsiveJobAdmin extends Component
{
    public $jobs;
    public $status;

    public function mount()
    {
        // All jobs 
        $this->jobs = $this->allJobs();
    }

    public function allJobs()
    {
        return Job::all()->sortByDesc('updated_at');
    }

    public function updated($status)
    {
        // Select jobs by status 
        $this->jobs = Job::where('status', '=', $this->status)->get();

        // If status is 5 set job to all jobs 
        if ($this->status == 5) {
            $this->jobs = $this->allJobs();
        }
    }

    public function totalMinutes($jobId)
    {
        $minutes = Minute::where([['job_id', '=', $jobId], ['stopped', '=', 1]])->select('total')->get();
        return round($minutes->sum('total') / 60);
    }

    public function totalMaterial($jobId)
    {
        $material = Material::where('job_id', '=', $jobId)->select('amount')->get();
        return number_format($material->sum('amount'), 2, ',', '.');
    }

    public function render()
    {
        return view('livewire.responsive-job-admin')
        ->extends('klusminuten.layout.admin')
        ->section('content');
    }
}
