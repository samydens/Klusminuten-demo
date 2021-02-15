<?php

namespace App\Http\Livewire\Admin\Job;

use Livewire\Component;
use App\Models\Job;

class AdminJobDetails extends Component
{
    public $job;

    protected $rules = [
        'job.title' => 'required',
        'job.desc' => 'nullable',
        'job.agr_minutes' => 'nullable|numeric',
        'job.agr_material' => 'nullable|numeric'
    ];

    public function updatedJob()
    {
        $this->validate();
        $this->job->save();

        session()->flash('message', 'opgeslagen!');
    }

    public function render()
    {
        return view('livewire.admin.job.admin-job-details');
    }
}
