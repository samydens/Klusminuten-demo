<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
// use Illuminate\Support\Facades\DB;
use App\Models\Job;

class JobAdmin extends Component
{
    // public $allJobs;
    
    // public $statuses = [
    //     0 => 'Nog niet afgerond',
    //     1 => 'Afgerond'
    // ];

    public function render()
    {
        // $this->allJobs = DB::table('jobs')
        //     ->get()
        //     ->groupBy('status');
     
        return view('livewire.admin.job.job-admin', [
            'jobs' => Job::all(),
        ]);
    }
}
