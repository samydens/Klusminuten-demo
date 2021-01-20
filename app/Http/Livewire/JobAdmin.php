<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class JobAdmin extends Component
{
    public $query;
    public $activeJobs, $klusvijver, $archive;

    public function mount()
    {
        $this->activeJobs = Job::where('status', '=', 1)->get();
        $this->klusvijver = Job::where('status', '=', 0)->get();
        $this->archive = Job::where('status', '>', 1)->get();
    }

    public function render()
    {
        return view('livewire.job-admin');
    }
}
