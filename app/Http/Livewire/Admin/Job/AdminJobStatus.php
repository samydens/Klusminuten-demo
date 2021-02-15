<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
use App\Models\Job;

class AdminJobStatus extends Component
{
    public $job;

    protected $rules = [
        'job.status' => 'required|numeric'
    ];

    public function updatedJobStatus()
    {
        $this->validate();
        $this->job->save();
        
        session()->flash('message', 'Opgeslagen!');
    }

    public function render()
    {
        return view('livewire.admin.job.admin-job-status');
    }
}
