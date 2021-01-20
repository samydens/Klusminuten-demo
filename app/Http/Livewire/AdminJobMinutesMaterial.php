<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminJobMinutesMaterial extends Component
{
    public $jobId;

    public function mount($jobId)
    {
        $this->jobId = $jobId;
    }

    public function render()
    {
        return view('livewire.admin-job-minutes-material');
    }
}
