<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class JobAdmin extends Component
{
    public function render()
    {
        return view('livewire.job-admin', [
            'klusvijver' => Job::where('status', '=', 0)->get(),
            'activeJobs' => Job::where('status', '=', 1)->get(),
            'archive' => Job::where('status', '>', 1)->get()
        ]);
    }
}
