<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class AdminJobDetails extends Component
{
    public $job = [];
    public $showSubmit;
    public $jobId;

    protected $messages = [
        'required' => 'Dit veld is verplicht',
        'job.title.max' => 'Titel is te lang',
    ];

    public function mount($jobId)
    {
        $job = Job::find($jobId);

        $this->job['id'] = $job->id;
        $this->job['title'] = $job->title;
        $this->job['desc'] = $job->desc;
        $this->job['agr_minutes'] = $job->agr_minutes;
        $this->job['agr_material'] = $job->agr_material;
    }

    public function submit()
    {
        $this->validate([
            'job.title' => 'required|max:255',
            'job.desc' => 'required',
            'job.agr_minutes' => 'required|max:9999|integer',
            'job.agr_material' => 'required|max:999999.99'
        ]);

        $job = Job::find($this->job['id']);
        $job->title = $this->job['title'];
        $job->desc = $this->job['desc'];
        $job->agr_minutes = $this->job['agr_minutes'];
        $job->agr_material = $this->job['agr_material'];
        $job->save();

        $this->showSubmit = False;

        session()->flash('message', 'wijzigingen opgeslagen');
    }

    public function updatedJob()
    {
        $this->showSubmit = True;
    }

    public function render()
    {
        return view('livewire.admin-job-details');
    }
}
