<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class JobAdmin extends Component
{
    public $allJobs;
    
    public $statuses = [
        0 => 'Klusvijver',
        1 => 'In uitvoering',
        2 => 'Archief'
    ];

    public function render()
    {
        $this->allJobs = DB::table('jobs')
            ->get()
            ->groupBy('status');
     
        return view('livewire.job-admin');
    }
}
