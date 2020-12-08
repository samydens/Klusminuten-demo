<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use Illuminate\Support\Facades\DB;

class CurrentJobs extends Component
{
    public function getMin($jobId) 
    {
        // Get all min with job id which are stopped
        $minute = DB::table('minutes')->where([['job_id', '=', $jobId], ['stopped', '=', 1]])->select('total')->get();

        // Count them up
        $totalSec = $minute->sum('total');

        // Return in rounded minutes
        return round($totalSec / 60);
    }

    public function checkActive($jobId)
    {
        // Get minute records where stopped = 0
        $activeTimer = DB::table('minutes')->where([['stopped', '=', 0], ['job_id', '=', $jobId]])->get();

        // check if first returned id isset
        if (empty($activeTimer->first()->id)) {
            return True;
        }
    }

    public function completeJob($jobId)
    {
        // Update job to not be active and be completed
        $jobToComplete = Job::find($jobId);
        $jobToComplete->completed = 1;
        $jobToComplete->active = 0;
        $jobToComplete->save();
    }

    public function getActiveJobs()
    {
        // return all active jobs
        return DB::table('jobs')->where('active', '=', True)->get();
    }

    public function getMaterialCosts($jobId)
    {
        $material = DB::table('materials')->where('job_id', '=', $jobId)->select('amount')->get();

        return $material->sum('amount');
    }

    public function render()
    {
        return view('livewire.current-jobs')->layout('klusminuten.layout.app');
    }
}
