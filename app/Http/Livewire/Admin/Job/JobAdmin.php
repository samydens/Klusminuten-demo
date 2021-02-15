<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
// use Illuminate\Support\Facades\DB;
use App\Models\Job;

class JobAdmin extends Component
{
    public $query;
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
        $query = '%'.$this->query.'%';
     
        return view('livewire.admin.job.job-admin', [
            'jobs' => Job::where('title', 'like', $query)->get(),
        ]);
    }
}
