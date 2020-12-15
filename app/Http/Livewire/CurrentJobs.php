<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use Illuminate\Support\Facades\DB;

class CurrentJobs extends Component
{
    public $activeJobs;

    public function mount()
    {
        $this->getActiveJobs();
    }

    public function getMin($jobId) 
    {
        $minute = DB::table('minutes')->where([['job_id', '=', $jobId], ['stopped', '=', 1]])->select('total')->get();
        $totalSec = $minute->sum('total');
        return round($totalSec / 60);
    }

    public function completeJob($jobId)
    {
        $jobToComplete = Job::find($jobId);
        $jobToComplete->status = 2;
        $jobToComplete->save();

        $this->getActiveJobs();

        session()->flash('message', 'Klus afgerond!');
    }

    public function getActiveJobs()
    {
        $this->activeJobs = DB::table('jobs')->where('status', '=', 1)->get();
    }

    public function getMaterialCosts($jobId)
    {
        $material = DB::table('materials')->where('job_id', '=', $jobId)->select('amount')->get();
        return number_format($material->sum('amount'), 2, ',', '.');
    }

    public function render()
    {
        return view('livewire.current-jobs')
        ->extends('klusminuten.layout.app')
        ->section('content');
    }
}
