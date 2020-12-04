<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class CurrentJobs extends Component
{
    public $activeJobs;

    public function mount() {
        $this->activeJobs = Job::where('active', true)->get();
    }

    public function render()
    {
        return view('livewire.current-jobs');
    }
}
