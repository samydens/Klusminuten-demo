<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class AdminJobDetails extends Component
{
    public $jobRecord; // from db
    public $job = []; // input model array
    public $showSubmit = False; // boolean

    protected $messages = [
        'required' => 'Dit veld is verplicht',
        'job.title.max' => 'Titel is te lang',
    ];

    public function mount($jobId)
    {
        $this->jobRecord = Job::find($jobId);

        $job = $this->jobRecord;

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

        $this->jobRecord->title = $this->job['title'];
        $this->jobRecord->desc = $this->job['desc'];
        $this->jobRecord->agr_minutes = $this->job['agr_minutes'];
        $this->jobRecord->agr_material = $this->job['agr_material'];
        $this->jobRecord->save();

        $this->reset('showSubmit');

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
